<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interest extends Model
{
    protected $fillable = [
        'name','email','file_path','company_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\User','company_id');
    }

}
