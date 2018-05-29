<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'opening_id','interest_id','user_id','schedule'
    ];

    public function interview()
    {
        return $this->hasOne('App\Interview');
    }

    public function opening()
    {
        return $this->belongsTo('App\Opening');
    }

    public function interest()
    {
        return $this->belongsTo('App\Interest');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
