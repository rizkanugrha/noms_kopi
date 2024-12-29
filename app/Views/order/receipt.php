<?= $this->extend('dashboard/layout/layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5 text-center">
    <h2 class="mb-4">Pembayaran Berhasil</h2>
    <p>Nama Pemesan: <strong><?= $nama_pelanggan ?></strong></p>
    <p>Nomor Meja: <strong><?= $nomor_meja ?></strong></p>
    <p>Total Pembayaran: <strong>Rp. <?= number_format($total_pembayaran, 0, ',', '.') ?></strong></p>

    <div class="alert alert-success mt-4" role="alert">
        Terima kasih atas pembayaran Anda!
    </div>

    <div class="mt-4">
        <a href="<?= base_url('dashboard/index') ?>" class="btn btn-secondary">Kembali Beranda</a>
    </div>
</div>

<?= $this->endSection() ?>