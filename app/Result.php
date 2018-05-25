<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'comment','source_code'
    ];

    public function interview()
    {
        return $this->belongsTo('App\Interview');
    }
}
