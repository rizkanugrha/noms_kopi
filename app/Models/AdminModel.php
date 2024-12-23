<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins';
    protected $allowedFields = ['username', 'password', 'fullname', 'email'];
    protected $returnType = 'array';
    protected $useTimestamps = false;

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

    function addAdmin($data)
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
