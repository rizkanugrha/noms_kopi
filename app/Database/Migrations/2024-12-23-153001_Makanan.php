<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Makanan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id',
            'makanan' => [
                'type' => 'VARCHAR',
                'constraint' => '25'
            ],
            'harga' => [
                'type' => 'INTEGER',
                'constraint' => '25'
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => '25'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('makanan', true);
    }

    public function down()
    {
        $this->forge->dropTable('makanan', true);
    }
}
