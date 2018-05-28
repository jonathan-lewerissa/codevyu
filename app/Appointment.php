<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id','company_id','interview_id','schedule'
    ];

    public function interview()
    {
        return $this->hasOne('App\Interview');
    }

    public function user()
    {
        return $this->belongsTo('App\Interest','user_id');
    }

    public function company()
    {
        return $this->belongsTo('App\User','company_id');
    }
}
