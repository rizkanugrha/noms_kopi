<!-- Header -->
<?php
use App\Models\AdminModel;
$userModel = new AdminModel();
$sess = session();
$curUser = $sess->get('currentadmin');
$profile = $userModel->find($curUser['userid']);

?>
<div class="bg-warning text-white py-3 d-flex justify-content-between align-items-center">
    <!-- Logo dan Nama -->
    <div class="d-flex align-items-center mx-auto">
        <a href="<?= base_url('dashboard/index') ?>">
            <img src="<?= base_url('assets/logo.png') ?>" alt="Logo NOMS KOPI SIMONGAN"
                style="width: 90px; height: auto;" class="me-3">
        </a>
        <h1 class="mb-0 text-center">NOMS KOPI SIMONGAN</h1>
    </div>

    <!-- Ikon Profil with Popup -->
    <div class="position-relative">
        <!-- Profile Icon -->
        <a id="profileIcon" class="d-flex align-items-center justify-content-center"
            style="width: 50px; height: 50px; border-radius: 50%; background-color: white; cursor: pointer;">
            <i class="bi bi-person text-dark" style="font-size: 24px;"></i>
        </a>

        <!-- Profile Popup -->
        <div id="profilePopup" class="position-absolute bg-white shadow text-dark rounded p-3"
            style="top: 60px; right: 0; width: 300px; display: none; z-index: 1050;">
            <!-- Profile Picture -->
            <div class="text-center">
                <img src="<?= base_url('assets/user.png') ?>" alt="Foto Profil" class="rounded-circle mb-3"
                    style="width: 80px; height: 80px; object-fit: cover;">
            </div>

            <!-- User Info -->
            <h5 class="text-center mb-1"><?= $profile['fullname']; ?></h5>
            <p class="text-muted text-center mb-3">@<?= $profile['username']; ?></p>

            <!-- Logout Button -->
            <a href="<?= base_url('admin/logout') ?>" class="btn btn-danger w-100">
                Logout
            </a>
        </div>
    </div>
</div>