<?php

namespace App\Controllers\admin;

use App\Models\AdminModel;
use App\Controllers\BaseController;

use App\Models\OrderModel;
class Admin extends BaseController
{
    public function index()
    {
        $orderModel = new OrderModel();
        $orders = $orderModel->findAll();

        return view('admin/index', ['orders' => $orders]);
    }

    public function updateOrderStatus($orderId)
    {
        $orderModel = new OrderModel();
        $status = $this->request->getPost('status');

        if (!$orderModel->find($orderId)) {
            return redirect()->to(base_url('admin/index'))->with('error', 'Order tidak ditemukan.');
        }

        $orderModel->update($orderId, ['status_order' => $status]);
        return redirect()->to(base_url('admin/index'))->with('success', 'Status order berhasil diperbarui.');
    }
}