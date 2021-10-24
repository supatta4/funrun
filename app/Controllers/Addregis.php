<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisModel;
use App\Models\UserModel;

class Addregis extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
        $model = new RegisModel();
        $data['showregis'] = $model->findAll();
        echo view('addregis', $data);
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
            return redirect()->to('/result');
    }
}