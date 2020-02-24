<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Tambah Barang baru</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <div class="card-body">
      <?= form_open_multipart('Owner/Barang/add_brg') ?>
        <div class="form-group">
          <div class="row">
            <div class="col-md-9">
              <label for="">Nama Barang</label>
              <input type="text" name="nama_brg" value="" placeholder="Masukkan nama barang disini..." class="form-control" required>
            </div>
            <div class="col-md-3">
              <label for="">Tahun Keluar</label>
              <input type="text" name="tahun_keluar" value="" placeholder="YYYY" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="form-group">
         <div class="row">
            <div class="col-md-9">
            <label for="">Harga Barang [satuan]</label>
            <input type="text" name="harga_brg" value="" placeholder="000000" class="form-control" required>
          </div>
          <div class="col-md-3">
            <label for="">Stok</label>
            <input type="number" name="stok" value="" placeholder="00" class="form-control" required>
          </div>
         </div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
          <label for="">Brand</label>
          <a href="<?= site_url('Owner/Brand/add_index') ?>" class="float-right">Brand tidak ada? Masukkan sekarang!</a>
          <select name="id_brand" id="" class="form-control">
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
          <img src="" alt="">
        </div>
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="deskripsi" id="" cols="20" rows="5" class="form-control" placeholder="Boleh dikosongkan..."></textarea>
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