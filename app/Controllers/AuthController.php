<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
class AuthController extends BaseController
{
    public function index()
    {
        //
    }
	public function login()
    {
		 helper(['form','url','file']);
         $data = [
            'title' => 'Login',
        ];

        return view('templates/header', $data)
            . view('auth/login')
            . view('templates/footer');
    }
	public function login_post()
    {
		helper(['form','url','file']);
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
 
        $data = $userModel->where('email', $email)->first();
 
        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $session_data = [
                    'user_id' => $data['user_id'],
                    'name' => $data['name'],
                    'mobile' => $data['mobile'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($session_data);
                return redirect()->to('dashboard');
            } else {
                $session->setFlashdata('message', 'Password is incorrect.');
				$session->setFlashdata('alert-class', 'alert-danger');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('message', 'Email does not exist.');
			$session->setFlashdata('alert-class', 'alert-danger');
            return redirect()->to('/login');
        }
    }
	public function register()
    { 
		helper(['form','url','file']);
         $data = [
            'title' => 'Register',
        ];

        return view('templates/header', $data)
            . view('auth/register')
            . view('templates/footer');
    }
	public function register_post()
    {
       helper(['form','url','file']);
        $rules = [
            'full_name'          => 'required|min_length[2]|max_length[50]',
            'mobile'          => 'required|min_length[10]|max_length[10]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirm_password'  => 'matches[password]'
        ];
 
        if ($this->validate($rules)) {
            $userModel = new UserModel();
 
            $userData = [
                'name'     => $this->request->getVar('full_name'),
                'mobile'     => $this->request->getVar('mobile'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $userModel->insert($userData);
			$session->setFlashdata('message', 'Account created succesfully!');
			$session->setFlashdata('alert-class', 'alert-success');
            return redirect()->to('/login');
        } else {
			$data = [
				'title' => 'Register',
			];
            $data['validation'] = $this->validator;
            return view('templates/header', $data)
            . view('auth/register')
            . view('templates/footer');
        }
    }
	 public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
