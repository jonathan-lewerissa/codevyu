<?php

namespace Codevyu;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'comment', 'source_code'
    ];
}