<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\UserResetPasswordModel;
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
	public function forgot_password()
    {
        helper(['form','url','file']);
        $data['meta_title'] = 'Forgot Password';
        $data['meta_keywords'] = '';
        $data['meta_description'] = 'Forgot Password';
		 return view('templates/header', $data)
            . view('auth/forgotPassword')
            . view('templates/footer');
    }
	public function forgot_password_post()
    {
        helper(['form', 'text_helper', 'az', 'ci_email']);
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $mobile = $this->request->getVar('mobile');

        $val = $this->validate([
            'mobile' => 'required',
            'email' => 'required',
        ]);

        if (!$val) {
            session()->setFlashdata('message', 'Fileds can\'t empty');
            session()->setFlashdata('alert-class', 'alert-danger');
            return redirect()->to('forgot-password')->withInput()->with('validation', $this->validator);

        } else {
            $data = $userModel->where('email', $email)->first();
            if (!empty($data)) {
                if ($mobile == $data['mobile']) {
                    $encoded_email = urlencode($email);
                    $agent = $this->request->getUserAgent();
                    $reset_data['email'] = $email;
                    $reset_data['activation_id'] = random_string('alnum', 15);
                    $reset_data['created_at'] = date('Y-m-d H:i:s');
                    $reset_data['agent'] = $agent->getBrowser() . "-" . $agent->getVersion();
                    $reset_data['client_ip'] = $_SERVER['REMOTE_ADDR'];

                    $userResetPasswordModel = new UserResetPasswordModel();
                    if ($userResetPasswordModel->insert($reset_data)) {
                        $data1['reset_link'] = base_url() . "reset-password-confirm-user/" . $reset_data['activation_id'] . "/" . $encoded_email;
                        $data1["name"] = $data['name'];
                        $data1["user_email"] = $data['email'];
                        $data1["message"] = "Reset Password";
                        helper(['ci_email']);
                        resetPasswordEmail($data1);

                        return redirect()->to('login');
                    } else {
                        session()->setFlashdata('message', 'Error Sending Email');
                        session()->setFlashdata('alert-class', 'alert-danger');
                        return redirect()->route('forgot-password')->withInput();
                    }
                } else {
                    session()->setFlashdata('message', 'Mobile Doesn\'t Exist');
                    session()->setFlashdata('alert-class', 'alert-danger');
                    return redirect()->to('forgot-password');
                }
            } else {
                session()->setFlashdata('message', 'Email Doesn\'t Exist');
                session()->setFlashdata('alert-class', 'alert-danger');
                return redirect()->to('forgot-password');
            }
        }
    }
    

}
