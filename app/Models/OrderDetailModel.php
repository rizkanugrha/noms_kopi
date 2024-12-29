<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderDetailModel extends Model
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id_order_detail';
    protected $allowedFields = ['id_order', 'id_menu', 'jumlah', 'harga_total'];
}