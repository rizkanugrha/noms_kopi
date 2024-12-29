<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use App\Models\PembayaranModel;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class Order extends BaseController
{
    public function index()
    {
        return view('order/order');
    }

    public function createOrder()
    {
        $data = $this->request->getPost();

        if (!$data) {
            return $this->response->setJSON(['error' => 'Data tidak valid!'])->setStatusCode(400);
        }

        $orderModel = new OrderModel();
        $orderDetailModel = new OrderDetailModel();
        $pembayaranModel = new PembayaranModel();

        // Simpan data order
        $orderData = [
            'nama_pelanggan' => $data['nama_pelanggan'],
            'nomor_meja' => $data['nomor_meja'],
            'status_order' => 'pending',
        ];
        $orderId = $orderModel->insert($orderData);

        if (!$orderId) {
            return $this->response->setJSON(['error' => 'Gagal menyimpan data order!'])->setStatusCode(500);
        }

        // Simpan detail order
        $orderDetails = json_decode($data['order_details']);
        foreach ($orderDetails as $detail) {
            $orderDetailModel->insert([
                'id_order' => $orderId,
                'id_menu' => $detail->id_menu,
                'jumlah' => $detail->jumlah,
                'harga_total' => $detail->harga_total,
            ]);
        }

        // Simpan pembayaran
        $pembayaranData = [
            'id_order' => $orderId,
            'metode_pembayaran' => $data['metode_pembayaran'],
            'total_pembayaran' => $data['total_pembayaran'],
            'status_pembayaran' => $data['metode_pembayaran'] === 'cash' ? 'completed' : 'pending',
        ];
        $pembayaranModel->insert($pembayaranData);

        // Jika pembayaran dengan QRIS, arahkan ke halaman QR Code
        if ($data['metode_pembayaran'] === 'qris') {
            $this->generateQrCode($orderId);
            return redirect()->to(base_url("order/showQrCode/{$orderId}"));
        }

        // Jika pembayaran dengan Cash, arahkan ke halaman struk
        return redirect()->to(base_url("order/receipt/{$orderId}"));
    }

    public function showQrCode($orderId)
    {
        $orderModel = new OrderModel();
        $pembayaranModel = new PembayaranModel();

        $order = $orderModel->find($orderId);
        $pembayaran = $pembayaranModel->where('id_order', $orderId)->first();

        if (!$order || !$pembayaran) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Order tidak ditemukan');
        }

        $fileName = "{$orderId}.png";
        $qrPath = 'assets/qrcodes/' . $fileName;

        if (!file_exists(FCPATH . $qrPath)) {
            $this->generateQrCode($orderId);
        }

        return view('order/qr', [
            'fileName' => $fileName,
            'nama_pelanggan' => $order['nama_pelanggan'],
            'nomor_meja' => $order['nomor_meja'],
            'total_pembayaran' => $pembayaran['total_pembayaran'],
            'orderId' => $orderId, // Tambahkan ini
        ]);

    }

    private function generateQrCode($orderId)
    {
        $qrCode = new QrCode(base_url("order/pay/{$orderId}"));
        $writer = new PngWriter();

        $fileName = "{$orderId}.png";
        $qrCodePath = WRITEPATH . "qrcodes/{$fileName}";
        $publicPath = FCPATH . 'assets/qrcodes/';

        // Pastikan direktori penyimpanan di writable ada
        if (!is_dir(WRITEPATH . 'qrcodes')) {
            mkdir(WRITEPATH . 'qrcodes', 0777, true);
        }

        $writer->write($qrCode)->saveToFile($qrCodePath);

        // Pindahkan ke public/assets/qrcodes
        if (!is_dir($publicPath)) {
            mkdir($publicPath, 0777, true);
        }

        copy($qrCodePath, $publicPath . $fileName);
    }

    public function pay($orderId)
    {
        $pembayaranModel = new PembayaranModel();

        // Update status pembayaran menjadi selesai
        $update = $pembayaranModel->where('id_order', $orderId)
            ->set(['status_pembayaran' => 'completed', 'waktu_pembayaran' => date('Y-m-d H:i:s')])
            ->update();

        if ($update) {
            return $this->response->setJSON(['success' => 'Pembayaran berhasil!']);
        }

        return $this->response->setJSON(['error' => 'Gagal memproses pembayaran!'])->setStatusCode(500);
    }

    public function receipt($orderId)
    {
        $orderModel = new OrderModel();
        $pembayaranModel = new PembayaranModel();

        // Cari data order dan pembayaran
        $order = $orderModel->find($orderId);
        $pembayaran = $pembayaranModel->where('id_order', $orderId)->first();

        // Validasi keberadaan data
        if (!$order || !$pembayaran) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Order tidak ditemukan');
        }

        // Perbarui status pembayaran menjadi "paid"
        $pembayaranModel->where('id_order', $orderId)
            ->set(['status_pembayaran' => 'paid', 'waktu_pembayaran' => date('Y-m-d H:i:s')])
            ->update();

        // Kirim data ke view
        return view('order/receipt', [
            'nama_pelanggan' => $order['nama_pelanggan'],
            'nomor_meja' => $order['nomor_meja'],
            'total_pembayaran' => $pembayaran['total_pembayaran'],
        ]);
    }


}
