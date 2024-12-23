<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MakananModel;

class Makanan extends Seeder
{
    public function run()
    {

        $makanans = [
            [
                'id'   => 1,
                'makanan' => 'Bakmi Goreng',
                'harga' => 17000,
                'gambar' => 'assets/makanan/bakmigoreng.png'
            ],

            [
                'id'   => 2,
                'makanan' => 'Bakmi Rebus',
                'harga' => 17000,
                'gambar' => 'assets/makanan/bakmirebus.jpg'
            ],

            [
                'id'   => 3,
                'makanan' => 'Kwetiaw Goreng',
                'harga' => 17000,
                'gambar' => 'assets/makanan/kwetiawgoreng.jpg'
            ],

            [
                'id'   => 4,
                'makanan' => 'Kwetiaw Rebus',
                'harga' => 17000,
                'gambar' => 'assets/makanan/kwetiawrebus.jpg'
            ],

            [
                'id'   => 5,
                'makanan' => 'Nasi Goreng Mawut',
                'harga' => 18000,
                'gambar' => 'assets/makanan/mawut.jpg'
            ],

            [
                'id'   => 6,
                'makanan' => 'Nasi Goreng Surabaya',
                'harga' => 17000,
                'gambar' => 'assets/makanan/nasgorsurabaya.jpg'
            ],

            [
                'id'   => 7,
                'makanan' => 'Nasi Goreng Surabaya',
                'harga' => 17000,
                'gambar' => 'assets/makanan/petir.jpeg'
            ],

        ];

        $MakananModel = new MakananModel();
        foreach ($makanans as $panganan) {
            $MakananModel->insert($panganan);
        }
    }
}
