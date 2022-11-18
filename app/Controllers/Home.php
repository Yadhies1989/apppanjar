<?php

namespace App\Controllers;

use App\Models\KecamatanModel;
use App\Models\DesaModel;

class Home extends BaseController
{
    protected $kecamatanModel;
    protected $desaModel;

    public function __construct()
    {
        $this->kecamatanModel = new KecamatanModel();
        $this->desaModel = new desaModel();
    }
    public function index()
    {

        $kecamatan = $this->kecamatanModel->findAll();

        $data = [
            'title' => 'Dashboard',
            'kecamatan' => $kecamatan
        ];



        echo view('partial/header', $data);
        echo view('welcome_message');
        echo view('partial/footer');
    }
    public function gugatan()
    {

        $kecamatan = $this->kecamatanModel->findAll();

        $data = [
            'title' => 'Dashboard | Gugatan',
            'kecamatan' => $kecamatan
        ];



        echo view('partial/header', $data);
        echo view('v-gugatan');
        echo view('partial/footer');
    }
    public function action()
    {
        if ($this->request->getVar('action')) {
            $action = $this->request->getVar('action');

            if ($action == 'get_state') {

                $statedata = $this->desaModel->where('id_kecamatan', $this->request->getVar('country_id'))->findAll();

                echo json_encode($statedata);
            }
        }
    }
}
