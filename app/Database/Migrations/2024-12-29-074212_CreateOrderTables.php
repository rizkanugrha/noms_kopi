<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrderTables extends Migration
{
    public function up()
    {
        // Tabel Order
        $this->forge->addField([
            'id_order' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'nama_pelanggan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'status_order' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'completed', 'canceled'],
                'default' => 'pending',
                'null' => false,
            ],
            'waktu_order' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_order', true);
        $this->forge->createTable('order', true);

        // Tabel Order Detail
        $this->forge->addField([
            'id_order_detail' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'id_order' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'id_menu' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'jumlah' => [
                'type' => 'INT',
                'null' => false,
            ],
            'harga_total' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id_order_detail', true);
        $this->forge->addForeignKey('id_order', 'order', 'id_order', 'CASCADE', 'CASCADE');
        $this->forge->createTable('order_detail', true);

        // Tabel Pembayaran
        $this->forge->addField([
            'id_pembayaran' => [
                'type' => 'INT',
                'auto_increment' => true,
                'unsigned' => true,
            ],
            'id_order' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'metode_pembayaran' => [
                'type' => 'ENUM',
                'constraint' => ['cash', 'qris'],
                'null' => false,
            ],
            'total_pembayaran' => [
                'type' => 'INT',
                'null' => false,
            ],
            'status_pembayaran' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'paid', 'failed'],
                'default' => 'pending',
                'null' => false,
            ],
            'waktu_pembayaran' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_pembayaran', true);
        $this->forge->addForeignKey('id_order', 'order', 'id_order', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pembayaran', true);
    }

    public function down()
    {
        // Hapus tabel dengan urutan yang benar untuk menghindari konflik foreign key
        $this->forge->dropTable('pembayaran', true);
        $this->forge->dropTable('order_detail', true);
        $this->forge->dropTable('order', true);
    }

}
