<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Signup extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('/Login/signup');
    }
    

    public function save()
    {
        $rules = [
            'firstname' => 'required|min_length[2]|max_length[50]',
            'lastname' => 'required|min_length[2]|max_length[50]',
            'username' => 'required|min_length[3]|max_length[20]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]|max_length[255]',
            'password_confirm' => 'matches[password]'
            
        ];

        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'Username' => $this->request->getVar('username'),
                'Email' => $this->request->getVar('email'),
                'Password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'Firstname' => $this->request->getVar('firstname'),
                'lastanme' => $this->request->getVar('lastname')

            ];
            $model->save($data);
            return redirect()->to('/Login');
        }else{
            $data['validation'] = $this->validator;
            echo view('/Login/signup', $data);
        }
    }
}
