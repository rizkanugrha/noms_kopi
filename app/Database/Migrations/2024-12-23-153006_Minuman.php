<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Minuman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id',
            'minuman' => [
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
        $this->forge->createTable('minuman', true);
    }

    public function down()
    {
        $this->forge->dropTable('minuman', true);
    }
}
