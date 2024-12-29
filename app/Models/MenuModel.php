<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $allowedFields = ['nama', 'harga', 'deskripsi', 'gambar', 'id_kategori'];
    protected $returnType = 'array';
    protected $useTimestamps = true;
    // Aktifkan Timestamps
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getMenuByCategory()
    {
        return $this->db->table($this->table)
            ->select('menu.*, kategori.nama AS nama_kategori')
            ->join('kategori', 'kategori.id = menu.id_kategori')
            ->orderBy('kategori.nama', direction: 'ASC')
            ->get()
            ->getResultArray();
    }

    public function getByCategory($kategori)
    {
        return $this->select('menu.*, kategori.nama as kategori_nama')
            ->join('kategori', 'menu.id_kategori = kategori.id')
            ->where('kategori.nama', $kategori)
            ->findAll();
    }

}
