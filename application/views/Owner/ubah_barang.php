<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Ubah Barang</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <div class="card-body">
      <form action="">
        <div class="form-group">
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
            <option value="">Pilih Brand</option>
            <option value="">ANU</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Kategori</label>
          <select name="id_kategori_brg" id="" class="form-control">
            <option value="">Pilih Kategori Barang</option>
            <option value="">ANU</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Gambar Barang</label>
          <input type="file" name="photo_brg" value="" class="form-control">
          <img src="" alt="">
        </div>
        <div class="form-group">
          <label for="">Deskripsi</label>
          <textarea name="deskripsi" id="" cols="20" rows="5" class="form-control" placeholder="Boleh dikosongkan..."><?= $brg->deskripsi ?></textarea>
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