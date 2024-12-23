<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MinumanModel;

class Minuman extends Seeder
{
    public function run()
    {
        $minumans = [
            [
                'minuman' => 'Kopi Susu Rakyat',
                'harga' => 15000,
                'gambar' => 'assets/minuman/kopsu.jpg'
            ],

            [
                'minuman' => 'Kopi Klotok Susu',
                'harga' => 15000,
                'gambar' => 'assets/minuman/klotoksusu.webp'
            ],

            [
                'minuman' => 'Kopi Klotok Susu Coklat',
                'harga' => 15000,
                'gambar' => 'assets/minuman/kopsucoklat.webp'
            ],

            [
                'minuman' => 'Kopi Klotok',
                'harga' => 10000,
                'gambar' => 'assets/minuman/klotok.webp'
            ],

            [
                'minuman' => 'Susu Sirup',
                'harga' => 10000,
                'gambar' => 'assets/minuman/sususirup.jpg'
            ],

            [
                'minuman' => 'Soda Gembira',
                'harga' => 17000,
                'gambar' => 'assets/minuman/sodagembira.png'
            ],

            [
                'minuman' => 'Vanilla Sujelly',
                'harga' => 15000,
                'gambar' => 'assets/minuman/vanilasujely.webp'
            ],

            [
                'minuman' => 'Caramel Sujelly',
                'harga' => 15000,
                'gambar' => 'assets/minuman/caramel.webp'
            ],

            [
                'minuman' => 'Susu Pandan Jelly',
                'harga' => 15000,
                'gambar' => 'assets/minuman/pandan.webp'
            ],

            [
                'minuman' => 'Caramel Machiato',
                'harga' => 17000,
                'gambar' => 'assets/minuman/caramellatte.jpg'
            ],

            [
                'minuman' => 'Hazelnut Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/hazelnut.jpg'
            ],

            [
                'minuman' => 'Cappucino',
                'harga' => 17000,
                'gambar' => 'assets/minuman/cappucino.webp'
            ],

            [
                'minuman' => 'Vanilla Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/vanilla.webp'
            ],

            [
                'minuman' => 'Redvelvet Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/redvelvet.jpg'
            ],

            [
                'minuman' => 'Taro Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/taro.webp'
            ],

            [
                'minuman' => 'Green Tea Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/green.webp'
            ],

            [
                'minuman' => 'peach Soda lychee',
                'harga' => 17000,
                'gambar' => 'assets/minuman/sodalychee.jpg'
            ],

            [
                'minuman' => 'Teh Rakyat',
                'harga' => 6000,
                'gambar' => 'assets/minuman/teh.jpg'
            ],

            [
                'minuman' => 'Thai Tea',
                'harga' => 17000,
                'gambar' => 'assets/minuman/thaitea.webp'
            ],

            [
                'minuman' => 'Teh Kampoel',
                'harga' => 10000,
                'gambar' => 'assets/minuman/tehkampul.jpg'
            ],

            [
                'minuman' => 'Lychee Tea',
                'harga' => 17000,
                'gambar' => 'assets/minuman/lycheetea.jpg'
            ],
        ];

        $minumMdl = new MinumanModel();

        foreach ($minumans as $minuman) {
            $minumMdl->insert($minuman);
        }
    }
}
