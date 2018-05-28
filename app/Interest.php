<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'name','email','file_path','opening_id'
    ];

    public function opening()
    {
        return $this->belongsTo('App\Opening');
    }

}
