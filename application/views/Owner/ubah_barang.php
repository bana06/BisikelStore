<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Ubah Barang</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <div class="card-body">
      <?= form_open_multipart('Owner/Barang/edit_brg') ?>
        <div class="form-group">
          <input type="hidden" name="id_brg" value="<?= $brg->id_brg ?>">
          <label for="">Nama Barang</label>
          <input type="text" name="nama_brg" value="<?= $brg->nama_brg ?>" placeholder="Masukkan nama barang disini..." class="form-control">
        </div>
        <div class="form-group">
         <div class="row">
            <div class="col-md-9">
            <label for="">Harga Barang [satuan]</label>
            <input type="text" name="harga_brg" value="<?= $brg->harga_brg ?>" placeholder="000000" class="form-control">
          </div>
          <div class="col-md-3">
            <label for="">Stok</label>
            <input type="number" name="stok" value="<?= $brg->stok ?>" placeholder="00" class="form-control">
          </div>
         </div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
          <label for="">Brand</label>
          <select name="id_brand" id="" class="form-control">
            <option value=""><?= $brg->brand ?></option>
            <option value="">Pilih Brand</option>
            <?php
              foreach ($brand as $q) {
            ?>
              <option value="<?= $q->id_brand ?>"><?= $q->brand ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="">Kategori</label>
          <select name="id_kategori_brg" id="" class="form-control">
            <option value=""><?= $brg->kategori_brg ?></option>
            <option value="">Pilih Kategori Barang</option>
            <?php
              foreach ($kategori as $kt) {
            ?>
              <option value="<?= $kt->id_kategori_brg ?>"><?= $kt->kategori_brg ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="">Gambar Barang</label>
          <input type="file" name="photo_brg" value="" class="form-control">
          <label for="">*Gambar sebelumnya </label>
          <img class="img-fluid mt-3 ml-3" src="<?= site_url('assets/img/barang/').$brg->photo_brg ?>" width="100px" height="100px">
        </div>
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="deskripsi" id="" cols="20" rows="5" class="form-control" placeholder="Boleh dikosongkan..."><?= $brg->deskripsi ?></textarea>
        </div>
        <div class="float-right">
          <a href="<?= site_url('Owner/Barang') ?>" class="btn btn-default">Batal</a>
          <button class="btn btn-success">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>