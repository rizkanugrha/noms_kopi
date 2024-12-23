<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'fullname', 'email'];
    protected $returnType = 'array';
    protected $useTimestamps = false;

    public $rules = [
        'username' => [
            'rules' => 'required|alpha_numeric|min_length[5]|is_unique[users.username]',
            'errors' => [
                'required' => 'Username tidak boleh kosong.',
                'is_unique' => 'Username sudah terdaftar.',
                'alpha_numeric' => 'Username harus kombinasi huruf dan angka.',
                'min_length' => 'Username minimal 5 karakter.',
            ],
        ],
        'password' => [
            'rules' => 'required|min_length[8]|alpha_numeric',
            'errors' => [
                'required' => 'Password tidak boleh kosong.',
                'min_length' => 'Password minimal 8 karakter.',
                'alpha_numeric' => 'Password harus kombinasi huruf dan angka.',
            ],
        ],
        'confirmation' => [
            'rules' => 'required_with[password]|matches[password]',
            'errors' => [
                'required_with' => 'Konfirmasi password tidak boleh kosong.',
                'matches' => 'Password tidak sama.',
            ],
        ],
        'fullname' => [
            'rules' => 'required|min_length[6]',
            'errors' => [
                'required' => 'Nama lengkap tidak boleh kosong.',
                'min_length' => 'Nama lengkap minimal 4 karakter.',
            ],
        ],
        'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email tidak boleh kosong.',
                'valid_email' => 'Format email tidak valid.',
            ],
        ],
    ];

    public $loginRules = [
        'username' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Username tidak boleh kosong.',
            ],
        ],
        'password' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Password tidak boleh kosong.',
            ],
        ]
    ];

    function addUser($data)
    {
        $user = new User();
        $user->username = $data['username'];
        $user->password = $data['password'];
        $user->fullname = $data['fullname'];
        $user->email = $data['email'];
        $this->save($user);
        return [$user->username, $this->getInsertID()];
    }
}
