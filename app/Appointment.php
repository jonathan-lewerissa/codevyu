<?php

namespace Codevyu;

use Illuminate\Database\Eloquent\Model;
8
class Appointment extends Model
{
    protected $fillable = [
        'user_id', 'company_id', 'link'
    ];

}
