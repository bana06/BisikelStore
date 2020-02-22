<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Hello Owner!</h1>
  <a href="<?= site_url('Owner/Home/edit_index/'.$user->id_user) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-edit fa-sm text-white-50"></i> Edit Profile
  </a>
</div>

<!-- Content Row -->

<div class="row">

  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-warning">Photo Profil</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= site_url('assets/img/profile/').$profile ?>" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-warning">Profil Saya</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-md-4"><h4>Nama</h4></div>
            <div class="col-md-1"><h4>:</h4></div>
            <div class="col-md-7"><h4><?= $fullname ?></h4></div>
          </div>
          <div class="row">
            <div class="col-md-4"><h4>Jenis Kelamin</h4></div>
            <div class="col-md-1"><h4>:</h4></div>
            <div class="col-md-7">
              <h4>
              <?php
                if ($jk = 1) {
                  echo "Laki-laki";
                } else {
                  echo "Perempuan";
                }
                
              ?>
              </h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"><h4>Tanggal Lahir</h4></div>
            <div class="col-md-1"><h4>:</h4></div>
            <div class="col-md-7"><h4><?= $tgl_lahir ?></h4></div>
          </div>
        </div>
      </div>
    </div>

    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-warning">Kontak</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-md-4"><h4>Email</h4></div>
            <div class="col-md-1"><h4>:</h4></div>
            <div class="col-md-7"><h4><?= $email ?></h4></div>
          </div>
          <div class="row">
            <div class="col-md-4"><h4>No Hp.</h4></div>
            <div class="col-md-1"><h4>:</h4></div>
            <div class="col-md-7"><h4><?= $no_hp ?></h4></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>