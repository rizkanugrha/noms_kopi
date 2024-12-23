<?= $this->extend('dashboard/layout/layout') ?>
<?= $this->section('content') ?>

<!-- Recommended Section -->
<div class="container mt-4">
    <div class="title d-flex flex-row align-items-center">
        <i class="fas fa-thumbs-up fa-3x"></i>
        <h2 class="recommended-title">RECOMMENDED</h2>
    </div>
    <div class="row mt-3">
        <!-- Menu Item 1 -->
        <div class="col-md-4">
            <div class="card d-flex flex-row align-items-center p-2 shadow-sm">
                <img src="<?= base_url() ?>/assets/minuman/kopsu.jpg" alt="Kopi Susu Rakyat" class="me-3">
                <div class="card-body">
                    <h5 class="card-title mb-1">Kopi Susu Rakyat</h5>
                    <p class="card-text text-muted">Rp. 15.000</p>
                </div>
            </div>
        </div>
        <!-- Menu Item 2 -->
        <div class="col-md-4">
            <div class="card d-flex flex-row align-items-center p-2 shadow-sm">
                <img src="<?= base_url() ?>/assets/makanan/nasgorsurabaya.jpg" alt="Nasgor Merah SBY" class="me-3">
                <div class="card-body">
                    <h5 class="card-title mb- 1">Nasgor Merah SBY</h5>
                    <p class="card-text text-muted">Rp. 17.000</p>
                </div>
            </div>
        </div>
        <!-- Menu Item 3 -->
        <div class="col-md-4">
            <div class="card d-flex flex-row align-items-center p-2 shadow-sm">
                <img src="<?= base_url() ?>/assets/snack/mix.jpeg" alt="Mix Platter" class="me-3">
                <div class="card-body">
                    <h5 class="card-title mb-1">Mix Platter</h5>
                    <p class="card-text text-muted">Rp. 22.000</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Garis Pembatas -->
<div class="container mt-4">
    <hr class="custom-divider">
</div>

<div class="container mt-4 mb-xxl-4">
    <h2 class="recommended-title">DISKON & PROMO</h2>
    <div class="row mt-3">
        <!-- Diskon Item -->
        <div class="col-md-6">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center">
                    <img src="<?= base_url() ?>/assets/minuman/kopsu.jpg" alt="Promo Kopi" class="me-3 rounded-circle">
                    <div>
                        <h5 class="card-title mb-1">Diskon Kopi Susu</h5>
                        <p class="card-text text-muted mb-2">
                            Nikmati diskon 20% untuk pembelian kopi susu setiap hari Senin!
                        </p>
                        <span class="badge bg-success">Diskon 20%</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Promo Item -->
        <div class="col-md-6">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center">
                    <img src="<?= base_url() ?>/assets/promo.jpg" alt="Promo Makanan" class="me-3 rounded-circle">
                    <div>
                        <h5 class="card-title mb-1">Promo Makan Siang</h5>
                        <p class="card-text text-muted mb-2">
                            Gratis snack untuk setiap pembelian menu makan siang di atas Rp. 50.000!
                        </p>
                        <span class="badge bg-primary">Gratis Snack</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>