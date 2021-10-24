<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisModel;
use App\Models\UserModel;

class Result extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
        $model = new RegisModel();
        $data['showregis'] = $model->findAll();
        echo view('result', $data);
    }

    public function regis() {
        $session = session();
        $RegisModel = new RegisModel();
        $data = [
            'ID' => $this->request->getVar('ID'),
            'member' => $this->request->getVar('id_card'),
            'category_run' => $this->request->getVar('category')
        ];
        $RegisModel->insert($data);
            return redirect()->to('/username');
    }
}
