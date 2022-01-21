<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\SensorModel;

class Sensor extends ResourceController
{
    protected $modelName = 'App\Models\SensorModel';
    protected $format = 'json';

    /**
     * index function
     * @method : GET
     */
    public function index()
    {
        return $this->respond([
            'statusCode' => 200,
            'message'    => 'OK',
            'data'       => $this->model->orderBy('id', 'DESC')->findAll()
        ], 200);
    }

    /**
     * show function
     * @method : GET with params ID
     */
    public function show($id = null)
    {
        return $this->respond([
            'statusCode' => 200,
            'message'    => 'OK',
            'data'       => $this->model->find($id)
        ], 200);
    }

    /**
     * create function
     * @method : POST
     */
    public function create()
    {
        if ($this->request)
        {
            //get request from Vue Js
            if($this->request->getJSON()) {

                $json = $this->request->getJSON();

                $post = $this->model->insert([
                    'suhu'     => $json->suhu,
                    'kelembapan'   => $json->kelembapan,
                    'tekanan'   => $json->tekanan,
                    'co2'   => $json->co2
                ]);

            } else {

                //get request from PostMan and more
                $post = $this->model->insert([
                    'suhu'     => $this->request->getPost('suhu'),
                    'kelembapan'   => $this->request->getPost('kelembapan'),
                    'tekanan'   => $this->request->getPost('tekanan'),
                    'co2'   => $this->request->getPost('co2')
                ]);

            }
            
            return $this->respond([
                'statusCode' => 201,
                'message'    => 'Data Berhasil Disimpan!', 
            ], 201);
        }
    }

    /**
     * update function
     * @method : PUT or PATCH
     */
    public function update($id = null)
    {
        $model = new SensorModel;
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'suhu' => $json->suhu,
                'kelembapan' => $json->kelembapan,
                'tekanan' => $json->tekanan,
                'co2' => $json->co2
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'suhu' => $input['suhu'],
                'kelembapan' => $input['kelembapan'],
                'tekanan' => $input['tekanan'],
                'co2' => $input['co2']
            ];
        }
        // Insert to Database
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    /**
     * edit function
     * @method : DELETE with params ID
     */

    public function delete($id = null)
    {
        $post = $this->model->find($id);

        if($post) {

            $this->model->delete($id);

            return $this->respond([
                'statusCode' => 200,
                'message'    => 'OK',
            ], 200);

        }
    }
}
