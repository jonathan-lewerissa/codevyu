<?php
/**
 * Created by PhpStorm.
 * User: hehe
 * Date: 5/15/18
 * Time: 5:29 PM
 */

namespace Codevyu\Repositories;

use Codevyu\Appointment;

class AppointmentRepository implements \AppointmentInterface
{
    protected $model;

    public function __construct(Appointment $appointment)
    {
        $this->model = $appointment;
    }

    public function all()
    {
        return $this->model->all();
    }


}