<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Transaksi</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= site_url('User/Home') ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="<?= site_url('User/Transaksi') ?>">Transaksi</a>
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
                <?= $this->session->flashdata('message'); ?>
                <div class="bg-secondary p-3 text-white mb-4">
                    <div class="m-4">
                        <div class="mb-1">
                            <label class="h4 mb-2">TOTAL PEMBAYARAN</label>
                        </div>
                        <div>
                            <label class="h1 ml-5 text-warning">Rp<?= $total ?>,00</label>
                            <label class="mr-5 text-warning float-right">
                                <?php
                                    if ($status_transaksi == 1) {
                                        echo "<label class='text-white bg-danger p-3'>BELUM DIBAYAR</label>";
                                    } else if($status_transaksi == 2){
                                        echo "<label class='text-white bg-warning p-3'><em class='fa fa-check'></em> MENUNGGU VERIFIKASI</label>";
                                    } else if($status_transaksi == 3){
                                        echo "<label class='text-white bg-info p-3'>PENGEMASAN</label>";
                                    } else if($status_transaksi == 4){
                                        echo "<label class='text-white bg-primary p-3'>DELIVERY</label>";
                                    }else{
                                        echo "<label class='text-white bg-success p-3'>SELESAI</label>";
                                    }
                                    
                                ?>
                            </label>
                        </div>
                        <label for="" class="text-white">* Bayar sesuai jumlah diatas.</label><br>
                        <label for="" class="text-white">Dicek dalam waktu 24jam setelah bukti transfer</label>
                        <?php
                            if ($status_transaksi == 4) {
                                echo '<hr>
                                <a href="'.site_url('User/Transaksi/updateStatusTransfer/').$id_order.'" class="btn btn-block btn-success p-3">
                                    <label for="">Tekan Disini jika Barang sudah diterima.</label>
                                </a>';
                            }
                        ?>
                    </div>
                </div>

                <div class="p-3">
                    <p class="text-secondary">1. Gunakan ATM / iBanking / mBanking / setor tunai untuk transfer ke Rekening Bisikel Store berikut ini.</p>
                </div>
                <div class="bg-warning p-5 text-white">
                    <h1 class="h1 text-center mb-2">TRANSFER KE REKENING INI</h1>
                    <img src="<?= site_url('assets/User/img/brand/Logo_BRI.png') ?>" alt="" class="img-responsive img-rounded mb-4 mr-4" width="60px"
                    height="50px"><label for="" class="h3">Bank Rakyat Indonesia</label>
                    <h3 class="h3 ">No. Rekening : 06501522654153354</h3>
                    <h3 class="h3 ">Cabang : Banjar</h3>
                    <h3 class="h3 ">Nama Rekening : PT AirPay International Indonesia</h3>
                </div>
                <div class="p-3">
                    <p class="text-secondary">* Pembayaran Bisikel Store didukung oleh PT AirPay International Indonesia</p>
                    <p class="text-secondary">Hanya menerima dari Bank BRI</p>
                    <p class="">2. Silahkan Upload Bukti Transfer.</p>
                    <p class="text-secondary">* Jika Anda sudah melakukan Upload Bukti Bayar. Anda akan melihat status Belum Bayar berubah menjadi <i>Menunggu Verifikasi Penjual</i></p>
                </div>
                <div class="bg-secondary p-4 text-white">
                <?= form_open_multipart('User/Transaksi/uploadBuktiBayar/')?>
                    <input name="id_order" type="hidden" value="<?= $id_order ?>">
                    <label for="" class="text-white">* Untuk Upload Bukti Bayar. Silahkan klik form dibawah ini.</label>
                    <!-- <input name="" type="file" class="form-control mb-4"> -->
                    <input type="file" name="photo_bukti" value="" class="form-control mb-4">

                    <button class="btn btn-block btn-warning">
                        Upload Sekarang
                    </button>
                    <a href="<?= site_url('User/Home') ?>" class="btn btn-block btn-outline-warning">
                        Upload Nanti
                    </a>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================