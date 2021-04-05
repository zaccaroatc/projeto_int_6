<?php

namespace App\Http\Controllers\Web;

use App\Entities\News;
use App\Entities\Point;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function home()
    {
        $points = Point::with('news', 'photos');

        return view('web.index',[
            'points' => $points
        ]);
    }

    public function showPoint($id)
    {
        $point = Point::where('id', $id)->with('news', 'photos')->first();
        list($lat, $long) = explode(',', $point->geolocation);

        return view('web.point.home',[
            'point' => $point,
            'lat' => $lat,
            'long' => $long
        ]);
    }

    public function showNews($id)
    {
        $point = Point::where('id', $id)->with('news', 'photos')->first();

        return view('web.point.news',[
            'point' => $point
        ]);
    }

    public function showSingle($id)
    {
        $notice = News::where('id', $id)->with('point')->first();
        $related = News::where('point_id', $notice->point->id)->where('id' ,'<>', $id)->get();

        return view('web.point.single',[
            'notice' => $notice,
            'related' => $related
        ]);
    }
}
