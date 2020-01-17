<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BS Admin - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="<?= site_url('assets/Owner/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= site_url('assets/Owner/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-warning">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-password-image"></div> -->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Anda Lupa Kata Sandi?</h1>
                    <p class="mb-4">Kami tau itu, terjadi kesalahan. Hanya dengan mengetikan Email Anda dibawah dan Kita akan memberikan Email untuk reset Kata Sandi Anda!</p>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email... seperti : contoh@email.com">
                    </div>
                    <a href="login.html" class="btn btn-warning btn-user btn-block">
                      Reset Kata Sandi
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= site_url('Auth/register') ?>">Buat Akun!</a>
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
