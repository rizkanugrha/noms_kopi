<!DOCTYPE html>
<html lang="en">
<?php
helper('form');
$validation = $validation ?? \Config\Services::validation();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4">Login Admin</h2>
            <!-- Menampilkan Pesan  Global -->
            <?php if (session()->getFlashdata('log_error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('log_error'); ?>
                </div>
            <?php endif; ?>
            <!-- Form Login -->
            <?= form_open(base_url('admin/login')) ?>
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username"
                    class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>"
                    placeholder="Masukkan username" value="<?= old('username') ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('username'); ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password"
                    class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>"
                    placeholder="Masukkan password">
                <div class="invalid-feedback">
                    <?= $validation->getError('password'); ?>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>