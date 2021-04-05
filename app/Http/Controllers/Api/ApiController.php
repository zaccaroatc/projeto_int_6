<?php

namespace App\Http\Controllers\Api;

use App\Entities\News;
use App\Entities\Point;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function home()
    {
        $points = Point::with('news', 'photos');

        return response()->success($points->get(),'Lista dos Pontos de Visitação', 200);
    }

    public function showPoint($id)
    {
        if(!$point = Point::where('id', $id)->with('news', 'photos')->get()->map(function($data){
            return [
                'id' => $data->id,
                'cta' => $data->cta,
                'description' => $data->description,
                'address' => $data->address,
                'tel' => $data->tel,
                'lat' => explode(',', $data->geolocation)[0],
                'long' => explode(',', $data->geolocation)[1],
                'news' => $data->news->map(function($notice){
                    return [
                        'id' => $notice->id,
                        'slug' => $notice->slug,
                        'title' => $notice->title,
                        'cover' => url($notice->cover),
                        'content' => $notice->content
                    ];
                }),
                'photos' => $data->photos->map(function($photo){
                    return [
                        'id' => $photo->id,
                        'path' => url($photo->path),
                        'type' => $photo->type,
                        'description' => $photo->description,
                    ];
                })
            ];
        })){
            return response()->error('Esse ID não corresponde a nenhum dos Pontos cadastrados', 200);
        }

        return response()->success([
            'point' => $point,
        ], 'Detalhes de Ponto Turístico', 200);
    }

    public function showNews($id)
    {
        if(!$point = Point::where('id', $id)->with('news')->get()->map(function($data){
            return [
                'id' => $data->id,
                'cta' => $data->cta,
                'news' => $data->news->map(function($notice){
                    return [
                        'id' => $notice->id,
                        'slug' => $notice->slug,
                        'title' => $notice->title,
                        'cover' => url($notice->cover),
                        'content' => $notice->content
                    ];
                })
            ];
        })){
            return response()->error('Esse ID não corresponde a nenhum dos Pontos cadastrados', 200);
        }

        return response()->success([
            'point' => $point,
        ], 'Notícias', 200);
    }

    public function showSingle($id)
    {
        if(!$notice = News::where('id', $id)->with('point')->get()->map(function($data) use($id){
            $data->increment('views');
            return [
                'id' => $data->id,
                'point' => $data->point->cta,
                'slug' => $data->slug,
                'title' => $data->title,
                'cover' => url($data->cover),
                'content' => $data->content,
                'related' => News::where('point_id', $data->point->id)->where('id' ,'<>', $id)->get()->map(function($related_notice){
                    return [
                        'id' =>$related_notice->id,
                        'slug' => $related_notice->slug,
                        'title' => $related_notice->title,
                        'cover' => url($related_notice->cover),
                        'content' => $related_notice->content
                    ];
                })
            ];
        })){
            return response()->error('Esse ID não corresponde a nenhuma notícia', 200);
        }

        return response()->success([
            'notice' => $notice,
        ], 'Single da Notícia', 200);
    }
}
