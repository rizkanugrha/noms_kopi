<?php
helper('form');
$validation = $validation ?? \Config\Services::validation();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - Noms Kopi Simongan</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
            <div class="card-body text-center">
                <!-- Logo -->
                <div class="bg-warning text-center py-3" style="border-radius: 20px;">
                    <img src="<?= base_url('assets/logo.png') ?>" alt="Logo Noms Kopi" class="img-fluid mb-3" style="width: 100px;">
                    <h3 class="text-white">Selamat datang di Noms Kopi</h3>
                </div>
                <p class="text-muted">Silakan login untuk melanjutkan</p>

                <!-- Menampilkan Pesan  Global -->
                <?php if (session()->getFlashdata('login_error')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('login_error'); ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('register_success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('register_success'); ?>
                    </div>
                <?php endif; ?>

                <!-- Form Login -->
                <?= form_open(base_url('auth/login')) ?>
                <?= csrf_field(); ?>
                <div class="mb-3 text-start">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" placeholder="Masukkan Username Anda" value="<?= old('username') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </div>
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" placeholder="Masukkan Password Anda">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <button type="submit" value="Login" class="btn btn-warning w-100 text-white">Login</button>
                <?= form_close() ?>

                <!-- Footer -->
                <div class="mt-3">
                    <p class="text-muted">Belum punya akun? <a href="<?= base_url('auth/register'); ?>" class="text-warning">Daftar di sini</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>