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
                <img src="<?= base_url() ?>/assets/makanan/nasgorsurabaya.jpg" alt="Nasi Goreng Surabaya" class="me-3">
                <div class="card-body">
                    <h5 class="card-title mb-1">Nasi Goreng Surabaya</h5>
                    <p class="card-text text-muted">Rp. 17.000</p>
                </div>

            </div>
        </div>
        <!-- Menu Item 2 -->
        <div class="col-md-4">
            <div class="card d-flex flex-row align-items-center p-2 shadow-sm">
                <img src="<?= base_url() ?>/assets/makanan/kwetiawgoreng.jpg" alt="Kwetiaw Goreng" class="me-3">
                <div class="card-body">
                    <h5 class="card-title mb-1">Kwetiaw Goreng</h5>
                    <p class="card-text text-muted">Rp. 17.000</p>
                </div>

            </div>
        </div>
        <!-- Menu Item 3 -->
        <div class="col-md-4">
            <div class="card d-flex flex-row align-items-center p-2 shadow-sm">
                <img src="<?= base_url() ?>/assets/makanan/bakmirebus.jpg" alt="bakmi" class="me-3">
                <div class="card-body">
                    <h5 class="card-title mb-1">Bakmi Rebus</h5>
                    <p class="card-text text-muted">Rp. 17.000</p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Garis Pembatas -->
<div class="container mt-4">
    <hr class="custom-divider">
</div>


<div class="container mt-5">
    <h2><?= esc($kategori) ?> List</h2>
    <div id="makanan-list">
        <?php foreach ($menus as $mam): ?>
            <div class="menu-item">
                <img src="<?= base_url() . '/' . $mam['gambar']; ?>" alt="<?= $mam['nama']; ?>">

                <div class="menu-details">
                    <h5 class="menu-title"> <?= $mam['nama']; ?> </h5>
                    <p class="menu-price">Rp.
                        <?= number_format($mam['harga'], 0, ',', '.'); ?>
                    </p>
                </div>
                <button class="add-to-cart"
                    onclick="addToCart(<?= $mam['id']; ?>, '<?= $mam['nama']; ?>', <?= $mam['harga']; ?>)">
                    +
                </button>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="cart-checkout" onclick="window.location.href='<?= base_url('order') ?>'">
        <i class="fas fa-shopping-bag"></i> Checkout (<span id="cart-count">0</span>)
    </div>

    <div class="back">
        <a href="<?= base_url('dashboard/index') ?>">
            <i class="fas fa-arrow-left "></i> Back
        </a>
    </div>

</div>
<?= $this->endSection() ?>