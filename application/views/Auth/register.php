<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BS Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= site_url('assets/Owner/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= site_url('assets/Owner/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-7 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Buat Akunmu!</h1>
                  </div>
                  <form class="user" action="<?= site_url('Auth/register') ?>" method="POST">
                    <div class="form-group row">
                      <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Nama Lengkap" value="<?= set_value('fullname') ?>">
                      <?= form_error('fullname', '<div class="text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group row">
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?= set_value('email') ?>">
                      <?= form_error('email', '<div class="text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group row">
                      <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="No Hp." value="<?= set_value('no_hp') ?>">
                      <?= form_error('no_hp', '<div class="text-danger">', '</div>') ?>
                    </div>
                    <div class="form-group row">
                      <label for="" class="mb-2">Tanggal Lahir</label>
                      <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?= set_value('tgl_lahir') ?>">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <label for="" class="mb-2">Jenis Kelamin</label>
                        <br>
                        <input type="radio" name="jk" value="1"><label for="" class="mr-5 ml-2"> Laki-laki</label>
                        <input type="radio" name="jk" value="2"><label for="" class="mr-5 ml-2"> Perempuan</label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <input name="password" type="password" class="form-control" id="inputpassword" placeholder="Password">
                      <?= form_error('password', '<div class="text-danger">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-warning btn-user btn-block">
                      Daftarkan Akun
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= site_url('Auth/forgotPassword') ?>">Lupa Kata Sandi?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= site_url('Auth') ?>">Sudah punya Akun? Masuk!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= site_url('assets/Owner/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= site_url('assets/Owner/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= site_url('assets/Owner/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= site_url('assets/Owner/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>