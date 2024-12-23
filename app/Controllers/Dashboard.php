<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MakananModel;
use App\Models\MinumanModel;
use App\Models\SnackModel;

class Dashboard extends BaseController
{
    public function __construct()
    {
        // Initialize SnackModel
    }

    public function index()
    {
        return view('dashboard/index');
    }

    public function makanan()
    {
        $makananModel = new MakananModel();
        $data['makanan'] = $makananModel->findAll();
        return view('dashboard/makanan', $data);
    }

    public function minuman()
    {
        $minumanModel = new MinumanModel();
        $data['minuman'] = $minumanModel->findAll();
        return view('dashboard/minuman', $data);
    }

    public function snack()
    {
        $snackModel = new SnackModel();
        $data['snack'] = $snackModel->findAll();
        return view('dashboard/snack', $data);
    }
}
