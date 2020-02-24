<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Riwayat Transaksi</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
      <!-- Topbar Search -->
    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Transaksi..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-warning" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form> -->
    <br><br>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="30px" class="text-center">ID ORDER</th>
            <th width="30px" class="text-center">ATAS PENGGUNA</th>
            <th width="150px" class="text-center">BUKTI TRANSFER</th>
            <th>TANGGAL</th>
            <th width="30px" class="text-center">TOTAL ITEM</th>
            <th>TOTAL BAYAR</th>
            <th width="300px" class="text-center">ALAMAT</th>
            <th width="100px" class="text-center">STATUS TRANSAKSI</th>
            <th width="200px" class="text-center">MENU</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th width="30px" class="text-center">ID ORDER</th>
            <th width="30px" class="text-center">ATAS PENGGUNA</th>
            <th width="150px" class="text-center">BUKTI TRANSFER</th>
            <th>TANGGAL</th>
            <th width="30px" class="text-center">TOTAL ITEM</th>
            <th>TOTAL BAYAR</th>
            <th width="300px" class="text-center">ALAMAT</th>
            <th width="100px" class="text-center">STATUS TRANSAKSI</th>
            <th width="200px" class="text-center">MENU</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            foreach ($getOrder as $q) {
          ?>
          <tr>
            <td><?= $q->id_order ?></td>
            <td><?= $q->fullname ?></td>
            <td>
                <img class="img-fluid img-responsive
                img-rounded" src="<?= site_url('assets/img/bukti_pembayaran/').$q->photo_bukti ?>" width="100px" height="100px">
            </td>
            <td><?= $q->tgl ?></td>
            <td class="text-center"><?= $q->total_item ?></td>
            <td>Rp<?= $q->total_bayar ?>,00</td>
            <td>
              <?php
                  foreach ($getAlamat as $ga) :
              ?>
                <?= $ga->alamat ?>
              <?php endforeach; ?>
            </td>
            <td>
            <?php
              if ($q->status_transaksi == 1) {
                  echo "<label class='text-white bg-success p-3 text-center'><em class='fa fa-check'></em> SELESAI</label>";
              }
            ?> 
            </td>
            <td>
              <div class="dropcenter">
                  <a href="<?= site_url('assets/img/bukti_pembayaran/').$q->photo_bukti ?>" class="btn btn-block btn-info" target="_blank">
                    Lihat Bukti TF
                  </a>
                </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
