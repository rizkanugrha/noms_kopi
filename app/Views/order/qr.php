<?= $this->extend('dashboard/layout/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5 text-center">
    <h2 class="mb-4">Scan QR Code untuk Pembayaran</h2>
    <p>Nama Pemesan: <strong><?= esc($nama_pelanggan) ?></strong></p>
    <p>Nomor Meja: <strong><?= esc($nomor_meja) ?></strong></p>
    <p>Total Pembayaran: <strong>Rp. <?= number_format($total_pembayaran, 0, ',', '.') ?></strong></p>

    <div class="mt-4">
        <?php $qrPath = 'assets/qrcodes/' . $fileName; ?>
        <?php if (file_exists(FCPATH . $qrPath)): ?>
            <img src="<?= base_url($qrPath) ?>" alt="QR Code" class="img-fluid" style="max-width: 300px;">
        <?php else: ?>
            <p class="text-danger">QR Code tidak ditemukan! Silakan hubungi admin.</p>
        <?php endif; ?>
    </div>

    <div class="mt-4">
        <a href="<?= base_url('order') ?>" class="btn btn-secondary">Kembali</a>
        <!-- Tombol Sudah Bayar -->
        <a href="<?= base_url('order/receipt/' . $orderId) ?>" id="btn-sudah-bayar" class="btn btn-success">Sudah
            Bayar</a>
    </div>
</div>

<script>
    document.getElementById('btn-sudah-bayar').addEventListener('click', function () {
        // Hapus semua data dari localStorage
        localStorage.clear();
        console.log('LocalStorage telah dihapus setelah pembayaran selesai.');
    });
</script>

<?= $this->endSection() ?>