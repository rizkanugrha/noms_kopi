<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \App\Models\AdminModel;
use \App\Entities\User;

class Admin extends Seeder
{
    public function run()
    {
        # $2y$10$WhI4kzkQ6bky6EtCboe3JOt/GivGPPJxsDY56wbBV7Lgy2B932QHS -> testingpassword
        $data = [
            [
                "id"       => 1,
                "username" => "gento",
                "password" => 'gento666',
                "fullname" => "Rizka Nugraha",
                "email" => "rizka@mhs.dinus.ac.id"
            ],
            [
                "id"       => 2,
                "username" => "Dayuda",
                "password" => 'yudabrebes123',
                "fullname" => "Krez Bavior",
                "email" => "dayuda@mhs.dinus.ac.id"
            ],
        ];

        $adminMdl = new AdminModel();
        foreach ($data as $user) {
            $adminMdl->addAdmin($user);
        }
    }
}
