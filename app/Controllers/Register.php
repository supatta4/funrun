<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function save() {
        //include helper form
        helper(['form']);
        //Set rules validation form
        $rules = [
            'id_card' => 'required|min_length[1]|max_length[30]', 
            'name' => 'required|min_length[3]|max_length[20]',
            'age' => 'required|min_length[2]|max_length[20]',
            'email' => 'required|min_length[5]|max_length[50]|valid_email|is_unique[member.email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confpassword' => 'matches[password]',
        ];
        if ($this->validate($rules)) {
            $model = new UserModel();
            $data = [
                'id_card' => $this->request->getVar('id_card'),
                'name' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}