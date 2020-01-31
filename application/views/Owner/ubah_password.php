<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Ubah Password</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <div class="card-body">
      <form action="">
        <div class="form-group">
          <label for="">Kata Sandi Baru</label>
          <input type="password" name="nama_brg" value="" placeholder="Masukkan kata sandi disini..." class="form-control">
        </div>
        <div class="form-group">
          <label for="">Ulangi Kata Sandi Baru</label>
          <input type="password" name="nama_brg" value="" placeholder="Masukkan kembali kata sandi disini..." class="form-control">
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