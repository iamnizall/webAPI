<?php

namespace App\Controllers;

use App\Models\SensorModel;

class Home extends BaseController
{

  public function index()
  {
    $db = \Config\Database::connect();
    $query   = $db->query('SELECT * FROM `sensors` ORDER BY `id` DESC LIMIT 1');
    $row   = $query->getRowArray();

    $sensor = new SensorModel();
    $data = $sensor->getSensor();
        // dd( $data);

    return view('iot/index',compact('data', 'row'));
 }

 public function team()
 {
  return view('iot/team');
}
}
