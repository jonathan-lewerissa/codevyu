<?php
/**
 * Created by PhpStorm.
 * User: hehe
 * Date: 5/15/18
 * Time: 5:37 PM
 */

namespace App\Services;


class AppointmentService
{
    protected $appointmentRepo;

    public function __construct(\AppointmentInterface $repo)
    {
        $this->appointmentRepo = $repo;
    }

    public function appointmentAll()
    {
        return $this->appointmentRepo->all();
    }
}