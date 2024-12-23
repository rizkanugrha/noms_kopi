 <!-- Header -->
 <div class="bg-warning text-white py-3 d-flex justify-content-between align-items-center">
     <!-- Logo dan Nama -->
     <div class="d-flex align-items-center mx-auto">
         <a href="index.html">
             <img src="<?= base_url('assets/logo.png') ?>" alt="Logo NOMS KOPI SIMONGAN" style="width: 90px; height: auto;" class="me-3">
         </a>
         <h1 class="mb-0 text-center">NOMS KOPI SIMONGAN</h1>
     </div>

     <!-- Ikon Profil -->
     <a href="profil.php" class="d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 50%; background-color: white;;">
         <i class="bi bi-person text-dark" style="font-size: 24px;"></i>
     </a>
 </div>


 <!-- Category Navigation -->
 <div class="container mt-3 text-center">
     <div class="category-btn">
         <div class="category-buttons">
             <a href="<?= base_url('dashboard/minuman') ?>">
                 <button class="category-btn">Minuman</button>
             </a>
             <a href="<?= base_url('dashboard/makanan') ?>">
                 <button class="category-btn">Makanan</button>
             </a>
             <a href="<?= base_url('dashboard/snack') ?>">
                 <button class="category-btn">Snack</button>
             </a>
         </div>
     </div>
 </div>