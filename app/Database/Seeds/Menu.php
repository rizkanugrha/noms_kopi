<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Menu extends Seeder
{
    public function run()
    {

        $currentTimestamp = date('Y-m-d H:i:s');

        $array = [
            [
                'id' => 1,
                'nama' => 'Kopi Susu Rakyat',
                'harga' => 15000,
                'gambar' => 'assets/minuman/kopsu.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 2,
                'nama' => 'Kopi Klotok Susu',
                'harga' => 15000,
                'gambar' => 'assets/minuman/klotoksusu.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 3,
                'nama' => 'Kopi Klotok Susu Coklat',
                'harga' => 15000,
                'gambar' => 'assets/minuman/kopsucoklat.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,

            ],

            [
                'id' => 4,
                'nama' => 'Kopi Klotok',
                'harga' => 10000,
                'gambar' => 'assets/minuman/klotok.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 5,
                'nama' => 'Susu Sirup',
                'harga' => 10000,
                'gambar' => 'assets/minuman/sususirup.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 6,
                'nama' => 'Soda Gembira',
                'harga' => 17000,
                'gambar' => 'assets/minuman/sodagembira.png',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 7,
                'nama' => 'Vanilla Sujelly',
                'harga' => 15000,
                'gambar' => 'assets/minuman/vanilasujely.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 8,
                'nama' => 'Caramel Sujelly',
                'harga' => 15000,
                'gambar' => 'assets/minuman/caramel.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 9,
                'nama' => 'Susu Pandan Jelly',
                'harga' => 15000,
                'gambar' => 'assets/minuman/pandan.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 10,
                'nama' => 'Caramel Machiato',
                'harga' => 17000,
                'gambar' => 'assets/minuman/caramellatte.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 11,
                'nama' => 'Hazelnut Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/hazelnut.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 12,
                'nama' => 'Cappucino',
                'harga' => 17000,
                'gambar' => 'assets/minuman/cappucino.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 13,
                'nama' => 'Vanilla Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/vanilla.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 14,
                'nama' => 'Redvelvet Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/redvelvet.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 35,
                'nama' => 'Taro Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/taro.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 15,
                'nama' => 'Green Tea Latte',
                'harga' => 17000,
                'gambar' => 'assets/minuman/green.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 16,
                'nama' => 'peach Soda lychee',
                'harga' => 17000,
                'gambar' => 'assets/minuman/sodalychee.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 17,
                'nama' => 'Teh Rakyat',
                'harga' => 6000,
                'gambar' => 'assets/minuman/teh.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 18,
                'nama' => 'Thai Tea',
                'harga' => 17000,
                'gambar' => 'assets/minuman/thaitea.webp',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 19,
                'nama' => 'Teh Kampoel',
                'harga' => 10000,
                'gambar' => 'assets/minuman/tehkampul.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,

            ],

            [
                'id' => 20,
                'nama' => 'Lychee Tea',
                'harga' => 17000,
                'gambar' => 'assets/minuman/lycheetea.jpg',
                'id_kategori' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'id' => 21,
                'nama' => 'Bakmi Goreng',
                'harga' => 17000,
                'gambar' => 'assets/makanan/bakmigoreng.png',
                'id_kategori' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 22,
                'nama' => 'Bakmi Rebus',
                'harga' => 17000,
                'gambar' => 'assets/makanan/bakmirebus.jpg',
                'id_kategori' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 23,
                'nama' => 'Kwetiaw Goreng',
                'harga' => 17000,
                'gambar' => 'assets/makanan/kwetiawgoreng.jpg',
                'id_kategori' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 24,
                'nama' => 'Kwetiaw Rebus',
                'harga' => 17000,
                'gambar' => 'assets/makanan/kwetiawrebus.jpg',
                'id_kategori' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 25,
                'nama' => 'Nasi Goreng Mawut',
                'harga' => 18000,
                'gambar' => 'assets/makanan/mawut.jpg',
                'id_kategori' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 26,
                'nama' => 'Nasi Goreng Surabaya',
                'harga' => 17000,
                'gambar' => 'assets/makanan/nasgorsurabaya.jpg',
                'id_kategori' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 27,
                'nama' => 'Nasi Goreng Surabaya',
                'harga' => 17000,
                'gambar' => 'assets/makanan/petir.jpeg',
                'id_kategori' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'id' => 28,
                'nama' => 'Cireng',
                'harga' => 15000,
                'gambar' => 'assets/snack/cireng.jpg',
                'id_kategori' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 29,
                'nama' => 'Kentang Goreng',
                'harga' => 15000,
                'gambar' => 'assets/snack/kentang.jpg',
                'id_kategori' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 30,
                'nama' => 'Mendoan',
                'harga' => 15000,
                'gambar' => 'assets/snack/mendoan.webp',
                'id_kategori' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 31,
                'nama' => 'Mix Platter',
                'harga' => 10000,
                'gambar' => 'assets/snack/mix.jpeg',
                'id_kategori' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'id' => 32,
                'nama' => 'Roti Coklat',
                'harga' => 10000,
                'gambar' => 'assets/snack/roticoklat.jpg',
                'id_kategori' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 33,
                'nama' => 'Singkong',
                'harga' => 17000,
                'gambar' => 'assets/snack/singkong.png',
                'id_kategori' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

            [
                'id' => 34,
                'nama' => 'Tahu Walik',
                'harga' => 10000,
                'gambar' => 'assets/snack/tahu.jpg',
                'id_kategori' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],

        ];


        // Insert data ke tabel menu
        $this->db->table('menu')->insertBatch($array);
    }
}
