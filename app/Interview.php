<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = [
        'room_id'
    ];

    public function appointment()
    {
        return $this->belongsTo('App\Appointment');
    }
}
