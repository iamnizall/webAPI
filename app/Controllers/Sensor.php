<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

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
        //model
        $post = $this->model;

        if ($this->request)
        {
            //get request from Vue Js
            if($this->request->getJSON()) {

                $json = $this->request->getJSON();
                
                $post->update($json->id, [
                    'suhu'     => $json->suhu,
                    'kelembapan'   => $json->kelembapan,
                    'tekanan'   => $json->tekanan,
                    'co2'   => $json->co2
                ]);

            } else {

                //get request from PostMan and more
                $data = $this->request->getRawInput();
                $post->update($id, $data);

            }

            return $this->respond([
                'statusCode' => 200,
                'message'    => 'Data Berhasil Diupdate!',
            ], 200);
        }
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
