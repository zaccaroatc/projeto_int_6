<?php

namespace App\Entities;

use App\Support\Cropper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Point extends Model
{
    protected $fillable = [
        'cta', 'description', 'address', 'tel', 'geolocation'
    ];

    public function news()
    {
        return $this->hasMany(News::class, 'point_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(Photos::class, 'point_id', 'id');
    }

    public function banner()
    {
        if(!$this->photos()->banner()->first()){
            return url(asset('frontend/assets/images/nophoto.jpg'));
        } else {
            return Storage::url($this->photos()->banner()->first()->path);
        }
    }

    public function cover()
    {
        if(!$this->photos()->cover()->first('path')){
            return url(asset('frontend/assets/images/nophoto.jpg'));
        } else {
            return $this->photos()->cover()->first()->path;
        }
    }

}
