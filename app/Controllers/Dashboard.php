<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use App\Models\MenuModel;
class Dashboard extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        return view('dashboard/index');
    }

    public function makanan()
    {
        $kategori = $this->request->getVar('kategori') ?? 'Makanan';
        $menus = $this->menuModel->getByCategory($kategori);

        return view('dashboard/makanan', ['menus' => $menus, 'kategori' => $kategori]);
    }

    public function minuman()
    {
        $kategori = $this->request->getVar('kategori') ?? 'Minuman';
        $menus = $this->menuModel->getByCategory($kategori);

        return view('dashboard/minuman', ['menus' => $menus, 'kategori' => $kategori]);
    }

    public function snack()
    {
        $kategori = $this->request->getVar('kategori') ?? 'Snack';
        $menus = $this->menuModel->getByCategory($kategori);

        return view('dashboard/snack', ['menus' => $menus, 'kategori' => $kategori]);
    }
}
