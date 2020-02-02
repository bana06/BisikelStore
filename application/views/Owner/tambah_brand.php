<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Tambah Stok Barang</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-6">
    <div class="card shadow mb-4">
      <div class="card-body">
      <?= form_open_multipart('Owner/Brand/add_brand')?>
        <div class="form-group">
          <label for="">Nama Barang</label>
          <input type="text" name="brand" value="" placeholder="Masukkan Brand disini..." class="form-control">
        </div>
        <!-- <div class="form-group">
          <label for="">Logo</label>
          <input type="file" name="logo_brand" class="form-control">
        </div> -->
        <div class="float-right">
          <a href="<?= site_url('Owner/Brand') ?>" class="btn btn-default">Batal</a>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      <!-- </form> -->
      </div>
    </div>
  </div>
</div>