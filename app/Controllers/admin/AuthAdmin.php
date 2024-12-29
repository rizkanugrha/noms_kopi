<?php

namespace App\Controllers\admin;

use App\Models\AdminModel;
use App\Controllers\BaseController;

class AuthAdmin extends BaseController
{

    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    public function login()
    {
        if (session()->get('currentadmin')) {
            return redirect()->to(base_url('admin/index'));
        }
        if ($this->request->getMethod() === 'POST') {
            if ($this->validate($this->adminModel->adminRules)) {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $user = $this->adminModel->where('username', $username)->first();

                if ($user && password_verify($password, $user['password'])) {
                    session()->set('currentadmin', [
                        'username' => $user['username'],
                        'userid' => $user['id']
                    ]);
                    return redirect()->to(base_url('admin/index'));
                } else {
                    session()->setFlashdata('log_error', 'Kombinasi Username & Password tidak ditemukan.');
                }
            }

            $data = [
                'validation' => $this->validator,
                'title' => 'Login'
            ];
            return view('admin/login', $data);
        }

        return view('admin/login', ['title' => 'Login']);
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('logout', 'Berhasil logout.');
        return redirect()->to(base_url('admin/login'));
    }
}
