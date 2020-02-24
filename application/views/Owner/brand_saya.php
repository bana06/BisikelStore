<div class="row">
  <div class="col-md-8">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
          <!-- Topbar Search -->
      <!--   <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Brand..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-warning" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form> -->
        <a href="<?= site_url('Owner/Brand/add_index') ?>" class="btn btn-success float-right mb-3">Tambah Brand Baru</a>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th width="20px">No</th>
                <!-- <th>Logo</th> -->
                <th>Brand</th>
                <th width="30px">Menu</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <!-- <th>Logo</th> -->
                <th>Brand</th>
                <th>Menu</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
                $no = 1;
                foreach ($brand as $data) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
                <!-- <td>
                  <img class="img-fluid" src="<?= site_url('assets/img/brand/').$data->logo_brand ?>" width="150px" height="150px">
                </td> -->
                <td><?= $data->brand ?></td>
                <td>
                  <div class="dropcenter">
                      <button class="btn btn-block btn-primary dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="<?= site_url('Owner/Brand/edit_index/').$data->id_brand ?>" class="dropdown-item"><i class="fas fa-edit " style="color:green;"></i> Edit</a><hr>
                        <a href="<?= site_url('Owner/Brand/delete_brand/').$data->id_brand ?>" class="dropdown-item"><i class="fas fa-trash" style="color:red;"></i> Hapus</a>
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

  </div>

  <div class="col-md-4 mt-5">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="form-control text-center" readonly>
          <h4>
            <?= date('d-M-Y') ?>  
          </h4>
        </div>
      </div>
    </div>
  </div>

</div>