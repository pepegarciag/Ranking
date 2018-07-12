<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'game',
        'points',
        'date',
    ];

    protected $dates = [
        'date'
    ];

    protected $casts = [
        'points' => 'integer',
    ];

    public function scopeRanking($query)
    {
        return $query->orderBy('points', 'desc');
    }
}
