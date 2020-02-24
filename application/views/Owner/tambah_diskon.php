<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Tambah Stok Barang</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-5">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= site_url('assets/img/barang/').$brg->photo_brg ?>" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <div class="card-body">
      <form action="<?= site_url('Owner/Barang/tambah_diskon') ?>" method="POST">
        <input type="hidden" name="id_brg" value="<?= $brg->id_brg ?>">
        <!-- <input type="hidden" name="diskon" value="<?= $brg->diskon ?>"> -->
        <div class="form-group">
          <label for="">Nama Barang</label>
          <input type="text" name="nama_brg" value="<?= $brg->nama_brg ?>" placeholder="Masukkan nama barang disini..." class="form-control" readonly>
        </div>
        <div class="form-group">
         <div class="row">
            <div class="col-md-8">
            <label for="">Harga Barang [satuan]</label>
            <input type="text" name="harga_brg" value="<?= $brg->harga_brg ?>" placeholder="000000" class="form-control" readonly>
          </div>
          <div class="col-md-4 mb-5">
            <label for="">Diskon</label>
            <input type="number" name="diskon" value="" placeholder="00" class="form-control">
          </div>
         </div>
        </div>
        <div class="float-right">
          <a href="<?= site_url('Owner/Barang') ?>" class="btn btn-default">Batal</a>
          <button class="btn btn-success">Simpan</button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>