<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Ubah Brand</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-4">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="form-control text-center" readonly>
          <h4>
            <?= date('d-M-Y') ?>  
          </h4>
        </div>
      </div>
    </div>

    <div class="card shadow mb-4">
      <div class="card-body">
      <?php
        foreach ($brand as $q) {
      ?>
      <form action="<?= site_url('Owner/Brand/edit_brand') ?>" method="POST">
        <input type="hidden" name="id_brand" value="<?= $q->id_brand ?>">
        <div class="form-group">
          <label for="">Brand</label>
          <input type="text" name="brand" value="<?= $q->brand ?>" placeholder="Masukkan nama barang disini..." class="form-control">
        </div>
        <!-- <div class="form-group">
          <label for="">Gambar Barang</label>
          <input type="file" name="photo_brg" value="" class="form-control">
          <img src="" alt="">
        </div> -->
        <div class="float-right">
          <a href="<?= site_url('Owner/Brand') ?>" class="btn btn-default">Batal</a>
          <button class="btn btn-success">Simpan</button>
        </div>
      </form>
      <?php } ?>
      </div>
    </div>
    
  </div>
<!--   <div class="col-md-5">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= site_url('assets/img/brand/').$q->logo_brand ?>" alt="">
        </div>
      </div>
    </div>
  </div> -->
</div>