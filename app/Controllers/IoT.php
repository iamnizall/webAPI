<?php

namespace App\Controllers;

class IoT extends BaseController
{
    public function index()
    {
        return view('iot/index');
    }

    public function team()
    {
        return view('iot/team');
    }
}
