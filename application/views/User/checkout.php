<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shopping Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= site_url('User/Home') ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?= site_url('User/Cart') ?>">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <div>
                    <div class="mb-4">
                        <label class="h2">ALAMAT PENGIRIMAN</label>
                        <a href="#" class="btn btn-info float-right">
                            <em class="fa fa-plus"></em>
                            Tambah Alamat
                        </a>
                    </div>
                    <h4 class=""><?= $getAlamat->alamat ?></h4>
                    <br>
                </div>
                <hr>
                <div>
                    <div class="mb-4 mt-5">
                        <label class="h2">DAFTAR BELANJA</label>
                    </div>
                    <?php
                        if ($id_brg == NULL) {
                            foreach ($cart as $q) {
                    ?>
                    <div class="row m-1">
                        <div class="col-md-3 text-center">
                            <img src="<?= site_url('assets/img/barang/').$q->photo_brg ?>" alt="" class="img-responsive" width="130px" height="130px">
                        </div>
                        <div class="col-md-9">
                            <h3 class="h2 text-warning"><?= $q->nama_brg ?></h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="h5">Rp<?= $q->harga_brg ?>,00</h5>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="h5 float-right mr-5">
                                        <div class="product_count">
                                            <input type="text" name="jumlah_pesanan" id="sst" maxlength="12" value="<?= $q->jumlah_pesanan ?>" title="Quantity:"
                                                class="input-text qty form-control text-center" readonly>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <?php 
                            }
                        } else {
                    ?>
                    <div class="row m-1">
                        <div class="col-md-3 text-center">
                            <img src="<?= site_url('assets/img/barang/').$cart->photo_brg ?>" alt="" class="img-responsive" width="130px" height="130px">
                        </div>
                        <div class="col-md-9">
                            <h3 class="h2 text-warning"><?= $cart->nama_brg ?></h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="h5">Rp<?= $cart->harga_brg ?>,00</h5>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="h5 float-right mr-5">
                                        <div class="product_count">
                                            <input type="text" name="jumlah_pesanan" id="sst" maxlength="12" value="<?= $cart->jumlah_pesanan ?>" title="Quantity:"
                                                class="input-text qty form-control text-center" readonly>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <br>
                    <hr>
                    <div class="mb-2 mt-5">
                        <label class="h2">KURIR</label>
                    </div>
                    <input type="text" class="form-control input-text text-center text-success" value="GRATIS ONGKIR!" readonly>
                    <h5 class="text-center text-muted mt-2 mb-2">
                        Ongkir ditanggung kami selama masih dalam jangkauan Kota Banjar.
                        Belanja Hemat tanpa takut ongkir mahal hanya di Bicikel Store.
                    </h5><br>
                    <hr>
                    <div class="mb-2 mt-5">
                        <label class="h2 mb-4">RINCIAN HARGA</label>
                    </div>
                    <div class="row m-2">
                        <div class="col-md-3 text-center">
                            <label for="" class="h4 float-left">Total Harga Barang</label>
                        </div>
                        <div class="col-md-9 mb-2">
                            <label for="" class="h4 float-right">Rp<?= $total ?>,00</label>
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col-md-3 text-center">
                            <label for="" class="h4 float-left">Diskon</label>
                        </div>
                        <div class="col-md-9 mb-2">
                            <label for="" class="h4 float-right">0 %</label>
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col-md-3 text-center">
                            <label for="" class="h4 float-left">Ongkos Kirim</label>
                        </div>
                        <div class="col-md-9 mb-2">
                            <label for="" class="h4 float-right text-warning">FREE</label>
                        </div>
                    </div>
                    <hr>
                    <div class="row m-4">
                        <div class="col-md-3 text-center mt-3">
                            <label for="" class="h4 float-left">Total Pembayaran</label>
                        </div>
                        <div class="col-md-9 mb-2 mt-3">
                            <label for="" class="h4 float-right text-warning">Rp<?= $total ?>,00</label>
                        </div>
                    </div>
                    <hr>
                    <?php
                        if ($id_brg != NULL) {
                            echo '<a href="'.site_url('User/Transaksi/insertOrder/').$id_brg.'" class="btn primary-btn float-right">Bayar dengan Transfer</a>';
                        } else {
                            echo '<a href="'.site_url('User/Transaksi/insertOrder/').'" class="btn primary-btn float-right">Bayar dengan Transfer</a>';
                        }
                        
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================