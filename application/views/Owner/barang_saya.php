<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
      <!-- Topbar Search -->
   <!--  <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
      <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Barang..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-warning" type="button">
            <i class="fas fa-search fa-sm"></i>
          </button>
        </div>
      </div>
    </form> -->
    <a href="<?= site_url('Owner/Barang/add_index') ?>" class="btn btn-success float-right mb-3">Tambah Barang</a>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Photo</th>
            <th>Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kondisi</th>
            <th>Brand</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Menu</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Photo</th>
            <th>Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kondisi</th>
            <th>Brand</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Menu</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $no = 1;
            foreach ($brg as $data) {
          ?>
          <tr>
            <td><?= $no++ ?></td>
            <td>
              <img class="img-fluid" src="<?= site_url('assets/img/barang/').$data->photo_brg ?>" width="100px" height="100px">
            </td>
            <td><?= $data->nama_brg ?></td>
            <td>
              <?php
                if ($data->harga_brg) {
                  echo 'Rp '.$data->harga_brg;
                } else {
                  echo "-";
                }
              ?>  
            </td>
            <td>
              <?php
                if ($data->stok) {
                  echo $data->stok;
                } else {
                  echo "-";
                }
              ?>  
            </td>
            <td>
            <?php
              if ($data->id_status = 1) {
                echo "Ada";
              } else if ($data->id_status = 1){
                echo "Habis";
              }else{
                echo "-";
              }
              
            ?>  
            </td>
            <td><?= $data->brand ?></td>
            <td><?= $data->kategori_brg ?></td>
            <td><?= $data->deskripsi ?></td>
            <td>
              <div class="dropcenter">
                  <button class="btn btn-block btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="<?= site_url('Owner/Barang/add_stok/').$data->id_brg ?>" class="dropdown-item"><i class="fas fa-plus " style="color:aqua;"></i> Tambah Stok</a><hr>
                    <a href="<?= site_url('Owner/Barang/edit_index/').$data->id_brg ?>" class="dropdown-item"><i class="fas fa-edit " style="color:green;"></i> Edit</a><hr>
                    <a href="<?= site_url('Owner/Barang/delete_brg/').$data->id_brg ?>" class="dropdown-item"><i class="fas fa-trash" style="color:red;"></i> Hapus</a>
                  </div>
                </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>