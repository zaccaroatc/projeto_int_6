<?php

namespace App\Http\Controllers\Api;

use App\Entities\Point;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function home()
    {
        $points = Point::with('news', 'photos');

        return response()->success($points->get(),'Lista dos Pontos de Visitação', 200);
    }

    public function showPoint($id)
    {
        $point = Point::where('id', $id)->with('news', 'photos')->first();
        list($lat, $long) = explode(',', $point->geolocation);

        return response()->success([
            'point' => $point,
            'lat' => $lat,
            'long' => $long
        ], 'Detalhes de Ponto Turístico', 200);
    }
}
