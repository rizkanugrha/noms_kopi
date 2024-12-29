<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Meja extends Migration
{
    public function up()
    {
        $this->forge->addColumn('order', [
            'nomor_meja' => [
                'type' => 'INTEGER',
                'default' => 0,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('order', 'nomor_meja');
    }
}
