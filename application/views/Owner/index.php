<!DOCTYPE html>
<html lang="en">

<head>

  <?= $header ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
<!-- index -->
    <!-- Sidebar -->
    <?= $sidebar ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?= $topbar ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <?= $content ?>
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?= $footer ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?= $logout_modal ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= site_url('assets/Owner/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= site_url('assets/Owner/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= site_url('assets/Owner/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= site_url('assets/Owner/') ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= site_url('assets/Owner/') ?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= site_url('assets/Owner/') ?>js/demo/chart-area-demo.js"></script>
  <script src="<?= site_url('assets/Owner/') ?>js/demo/chart-pie-demo.js"></script>

</body>

</html>
