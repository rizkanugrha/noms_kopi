<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Noms Kopi Simongan</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center mt-5">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
            <div class="card-body text-center">
                <!-- Logo -->
                <div class="bg-warning text-center py-3" style="border-radius: 20px;">
                    <img src="<?= base_url('assets/logo.png'); ?>" alt="Logo Noms Kopi" class="img-fluid mb-3" style="width: 100px;">
                    <h3 class="text-white">Welcome Back</h3>
                </div>
                <p class="text-muted">Silakan login untuk melanjutkan</p>
                <!-- Form Login -->
                <form action="<?= base_url('auth/login'); ?>" method="post">
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 text-white">Login</button>
                </form>

                <!-- Footer -->
                <div class="mt-3">
                    <p class="text-muted">Belum punya akun? <a href="<?= base_url('register'); ?>" class="text-warning">Daftar di sini</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>