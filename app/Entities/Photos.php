<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $fillable = [
        'point_id', 'path', 'types', 'description'
    ];

    public function point()
    {
        return $this->belongsTo(Point::class, 'point_id', 'id');
    }

    public function scopeBanner($query)
    {
        return $query->where('type', 2);
    }

    public function scopeCover($query)
    {
        return $query->where('type', 1);
    }

    public function scopeCommon($query)
    {
        return $query->where('type', 0);
    }

}
