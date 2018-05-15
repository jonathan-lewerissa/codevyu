<?php
/**
 * Created by PhpStorm.
 * User: hehe
 * Date: 5/15/18
 * Time: 5:51 PM
 */

namespace Codevyu\Services;

use Illuminate\Support\Facades\Facade;

class AppointmentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AppointmentService';
    }
}