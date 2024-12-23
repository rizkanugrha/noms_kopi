<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Snack extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id',
            'snack' => [
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
        $this->forge->createTable('snack', true);
    }

    public function down()
    {
        $this->forge->dropTable('snack', true);
    }
}
