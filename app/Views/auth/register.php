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
                    <h3 class="text-white">Daftar Akun Baru</h3>
                </div>
                <p class="text-muted">Silakan isi formulir untuk mendaftar</p>

                <!-- Menampilkan Pesan Error Global -->
                <?php if (session()->getFlashdata('register_error')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('register_error'); ?>
                    </div>
                <?php endif; ?>

                <!-- Form Register -->
                <?= form_open(base_url('auth/register')) ?>
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
                <div class="mb-3 text-start">
                    <label for="confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="confirmation" name="confirmation" class="form-control <?= ($validation->hasError('confirmation')) ? 'is-invalid' : '' ?>" placeholder="Konfirmasi Password Anda">
                    <div class="invalid-feedback">
                        <?= $validation->getError('confirmation'); ?>
                    </div>
                </div>
                <div class="mb-3 text-start">
                    <label for="fullname" class="form-label">Nama Lengkap</label>
                    <input type="text" id="fullname" name="fullname" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ?>" placeholder="Masukkan Nama Lengkap Anda" value="<?= old('fullname') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('fullname'); ?>
                    </div>
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>" placeholder="Masukkan Email Anda" value="<?= old('email') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning w-100 text-white">Daftar</button>
                <?= form_close() ?>

                <!-- Footer -->
                <div class="mt-3">
                    <p class="text-muted">Sudah punya akun? <a href="<?= base_url('auth/login'); ?>" class="text-warning">Login di sini</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>