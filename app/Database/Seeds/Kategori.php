<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kategori extends Seeder
{
    public function run()
    {
        $currentTimestamp = date('Y-m-d H:i:s');

        $data = [
            [
                'nama' => 'Makanan',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'nama' => 'Minuman',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'nama' => 'Snack',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ];

        $this->db->table('kategori')->insertBatch($data);

        echo "Kategori seeder berhasil dijalankan.\n";
    }
}
