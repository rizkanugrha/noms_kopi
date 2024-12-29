<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function register()
    {
        if ($this->request->getMethod() === 'POST') {
            if ($this->validate($this->userModel->rules)) {
                $data = [
                    'username' => $this->request->getPost('username'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                    'fullname' => $this->request->getPost('fullname'),
                    'email' => $this->request->getPost('email')
                ];

                if ($this->userModel->insert($data)) {
                    session()->setFlashdata('register_success', 'Berhasil registrasi. Silakan login.');
                    return redirect()->to(base_url('auth/login'));
                } else {
                    session()->setFlashdata('register_error', 'Terjadi kesalahan saat registrasi.');
                }
            }

            $data = [
                'validation' => $this->validator,
                'title' => 'Register'
            ];
            return view('auth/register', $data);
        }

        return view('auth/register', ['title' => 'Register']);
    }


    public function login()
    {
        if (session()->get('currentuser')) {
            return redirect()->to(base_url('dashboard/index'));
        }
        if ($this->request->getMethod() === 'POST') {
            if ($this->validate($this->userModel->loginRules)) {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $user = $this->userModel->where('username', $username)->first();

                if ($user && password_verify($password, $user['password'])) {
                    session()->set('currentuser', [
                        'username' => $user['username'],
                        'userid' => $user['id']
                    ]);
                    return redirect()->to(base_url('dashboard/index'));
                } else {
                    session()->setFlashdata('login_error', 'Kombinasi Username & Password tidak ditemukan.');
                }
            }

            $data = [
                'validation' => $this->validator,
                'title' => 'Login'
            ];
            return view('auth/login', $data);
        }

        return view('auth/login', ['title' => 'Login']);
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('logout', 'Berhasil logout.');
        return redirect()->to(base_url('auth/login'));
    }
}
