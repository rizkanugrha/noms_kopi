<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\SnackModel;

class Snack extends Seeder
{
    public function run()
    {

        $snacks = [
            [
                'nama' => 'Cireng',
                'harga' => 15000,
                'gambar' => 'assets/snack/cireng.jpg'
            ],

            [
                'nama' => 'Kentang Goreng',
                'harga' => 15000,
                'gambar' => 'assets/snack/kentang.jpg'
            ],

            [
                'nama' => 'Mendoan',
                'harga' => 15000,
                'gambar' => 'assets/snack/mendoan.webp'
            ],

            [
                'nama' => 'Mix Platter',
                'harga' => 10000,
                'gambar' => 'assets/snack/mix.jpeg'
            ],
            [
                'nama' => 'Roti Coklat',
                'harga' => 10000,
                'gambar' => 'assets/snack/roticoklat.jpg'
            ],

            [
                'nama' => 'Singkong',
                'harga' => 17000,
                'gambar' => 'assets/snack/singkong.png'
            ],

            [
                'nama' => 'Tahu Walik',
                'harga' => 10000,
                'gambar' => 'assets/snack/tahu.jpg'
            ],

        ];

        $model = new SnackModel();

        foreach ($snacks as $snack) {
            $model->insert($snack);
        }
    }
}
