<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $allowedFields = ['id_order', 'metode_pembayaran', 'total_pembayaran', 'status_pembayaran'];
    protected $useTimestamps = false;
}
