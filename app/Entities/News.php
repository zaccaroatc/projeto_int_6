<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = [
        'point_id', 'slug', 'title', 'cover', 'content', 'views', 'status'
    ];

    public function point()
    {
        return $this->belongsTo(Point::class, 'point_id', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function cover()
    {
        if (!$this->cover) {
            return url(asset('frontend/assets/images/nophoto.jpg'));
        }

        return $this->cover;
    }
}
