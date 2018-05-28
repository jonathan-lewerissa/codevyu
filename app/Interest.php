<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'name','email','file_path','company_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\User');
    }

}
