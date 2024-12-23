<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \App\Models\UserModel;
use \App\Entities\User;

class Users extends Seeder
{
    public function run()
    {
        # $2y$10$WhI4kzkQ6bky6EtCboe3JOt/GivGPPJxsDY56wbBV7Lgy2B932QHS -> testingpassword
        $data = [
            [
                "id"       => 1,
                "username" => "gento",
                "password" => 'testingpassword',
                "fullname" => "Rizka Nugraha",
                "email" => "rizka@mhs.dinus.ac.id"
            ],
            [
                "id"       => 2,
                "username" => "Dayuda",
                "password" => 'testingpassword',
                "fullname" => "Krez Bavior",
                "email" => "dayuda@mhs.dinus.ac.id"
            ],
            [
                "id"       => 3,
                "username" => "faishal",
                "password" => 'testingpassword',
                "fullname" => "faishal",
                "email" => "faishal@mhs.dinus.ac.id"
            ],
        ];

        $userMdl = new UserModel();
        foreach ($data as $user) {
            $userMdl->addUser($user);
        }
    }
}
