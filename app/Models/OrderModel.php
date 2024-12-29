<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id_order';
    protected $allowedFields = ['nama_pelanggan', 'status_order', 'nomor_meja'];
    protected $useTimestamps = false;
}
