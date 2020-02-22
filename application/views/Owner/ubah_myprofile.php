<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Ubah Profile</h1>
<!-- DataTales Example -->
<div class="row">
  <div class="col-md-7">
    <div class="card shadow mb-4">
      <div class="card-body">
      <?= form_open_multipart('Owner/Home/edit_myprofile') ?>
        <div class="form-group">
          <input type="hidden" name="id_user" value="<?= $brg->id_user ?>">
          <label for="">Fullname</label>
          <input type="text" name="fullname" value="<?= $brg->fullname ?>" placeholder="Masukkan nama barang disini..." class="form-control">
        </div>
        <div class="form-group">
         <div class="row">
            <div class="col-md-9">
            <label for="">email</label>
            <input type="text" name="email" value="<?= $brg->email ?>" placeholder="000000" class="form-control">
          </div>
          <div class="col-md-3">
            <label for="">No Handphone</label>
            <input type="number" name="no_hp" value="<?= $brg->no_hp ?>" placeholder="00" class="form-control">
          </div>
         </div>
        </div>
         <div class="form-group">
         <div class="row">
            <div class="col-md-12">
            <label for="">tanggal lahir</label>
            <input type="text" name="tgl_lahir" value="<?= $brg->tgl_lahir ?>" placeholder="000000" class="form-control">
          </div>
         </div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
          <label for="">Jenis Kelamain</label>
          <select name="jk"class="form-control" value="<?= $brg->jk ?>">
           
            <option value=""> Pilih </option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
          </select>
        </div>
     
        <div class="form-group">
          <label for="">Photo profile</label>
          <input type="file" name="photo_user" value="" class="form-control">
          <label for="">*Gambar sebelumnya </label>
          <img class="img-fluid mt-3 ml-3" src="<?= site_url('assets/img/profile/').$brg->photo_user ?>" width="100px" height="100px">
        </div>

        <div class="float-right">
          <a href="<?= site_url('Owner/Barang') ?>" class="btn btn-default">Batal</a>
          <button class="btn btn-success">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>