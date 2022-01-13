<?php namespace App\Models;

use CodeIgniter\Model;

class SensorModel extends Model
{
    /**
     * table name
     */
    protected $table = "sensors";

    /**
     * allowed Field
     */
    protected $allowedFields = [
        'suhu',
        'kelembapan',
        'tekanan',
        'co2'
    ];

    public function getSensor()
    {
        return $this->orderBy('id', 'DESC')->findAll();
    }
}