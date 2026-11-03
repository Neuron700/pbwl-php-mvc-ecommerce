<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
      <div class="container-fluid py-2">
            <h1 class="display-5 fw-bold mb-2">Aplikasi E-Commerce</h1>
            <p class="col-md-9 fs-5 text-muted mb-4">
                  Contoh aplikasi PHP MVC (Project 5) untuk mengelola <strong>Kategori</strong> dan
                  <strong>Produk</strong>: operasi tambah, ubah, hapus, serta unggah foto produk.
            </p>
            <div class="d-flex flex-wrap gap-2">
                  <a href="<?php echo URL; ?>/dashboard" class="btn btn-primary btn-lg">
                        <i class="bi bi-speedometer2"></i> Dashboard
                  </a>
                  <a href="<?php echo URL; ?>/kategori" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-tags"></i> Kategori
                  </a>
                  <a href="<?php echo URL; ?>/produk" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-box-seam"></i> Produk
                  </a>
            </div>
      </div>
</div>

<div class="row g-4">
      <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                  <div class="card-body">
                        <h5 class="card-title fw-semibold"><i class="bi bi-diagram-3 text-primary"></i> MVC Buatan Sendiri</h5>
                        <p class="card-text text-muted mb-0">
                              Routing ditangani <code>app/core/Bootstrap.php</code>; URL rapi seperti
                              <code>/kategori</code> dan <code>/produk</code>.
                        </p>
                  </div>
            </div>
      </div>
      <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                  <div class="card-body">
                        <h5 class="card-title fw-semibold"><i class="bi bi-upload text-primary"></i> Unggah Foto Produk</h5>
                        <p class="card-text text-muted mb-0">
                              Foto divalidasi (JPG/PNG/WEBP/GIF, maks 2 MB) dan disimpan di
                              <code>uploads/produk/</code>.
                        </p>
                  </div>
            </div>
      </div>
      <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                  <div class="card-body">
                        <h5 class="card-title fw-semibold"><i class="bi bi-database text-primary"></i> PDO &amp; MySQL</h5>
                        <p class="card-text text-muted mb-0">
                              Akses data memakai PDO dengan <em>prepared statement</em> agar aman dari
                              SQL injection.
                        </p>
                  </div>
            </div>
      </div>
</div>
