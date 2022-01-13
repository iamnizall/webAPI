<?php

namespace App\Controllers;

use App\Models\SensorModel;

class Home extends BaseController
{

    public function index()
    {

        $sensor = new SensorModel();
        $data = $sensor->getSensor();
        // dd( $data);

        return view('iot/index',compact('data'));
    }

    public function team()
    {
        return view('iot/team');
    }
}
