<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    protected $fillable = [
        'title','description','user_id'
    ];

    public function interest()
    {
        return $this->hasMany('App\Interest');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function appointment()
    {
        return $this->hasMany('App\Appointment');
    }
}
