<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('/Login/index.php');
    }
    public function authenticate()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $model = new UserModel();
        $user = $model->where('Username', $username)->first();

        if (!$user) {
            session()->setFlashdata('error', 'Invalid username or password');
            return redirect()->back();
        }
    
        if (!password_verify($password, $user['Password'])) {
            session()->setFlashdata('error', 'Invalid username or password');
            return redirect()->back();
        }
    
        // Login successful, set session and redirect to dashboard
        $session = session();
        $session->set('logged_in', true);
        $session->set('username', $username);
        
        return redirect()->to('/');
    }
    
}
