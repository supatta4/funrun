<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller {
    public function index() {
        //include helper form
        helper(['form']);
        echo view('login');
    }

    public function auth() {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_password = password_verify($password, $pass);
            if ($verify_password) {
                $ses_data = [
                    'id_card' => $data['id_card'],
                    'name' => $data['name'],
                    'age' => $data['age'],
                    'email' => $data['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/username');
            } else {
                $session->setFlashdata('msg', 'Wrong password');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email Not Found');
            return redirect()->to('/login');
        }
    }
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}