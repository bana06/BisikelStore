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
                <div class="bg-secondary p-3 text-white mb-4">
                    <div class="m-4">
                        <div class="mb-1">
                            <label class="h4 mb-2">TOTAL PEMBAYARAN</label>
                        </div>
                        <div>
                            <label class="h1 ml-5 text-warning">Rp<?= $total ?>,00</label>
                            <label class="h1 mr-5 text-warning float-right">
                                <label class="btn btn-warning">Belum Dibayar</label>
                            </label>
                        </div>
                        <label for="" class="text-white">* Bayar sesuai jumlah diatas.</label><br>
                        <label for="" class="text-white">Dicek dalam waktu 24jam setelah bukti transfer</label>
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
                </div>
                <div class="bg-secondary p-4 text-white">
                    <label for="" class="text-white">* Untuk Upload Bukti Bayar. Silahkan klik form dibawah ini.</label>
                    <input type="file" class="form-control mb-4">

                    <a href="#" class="btn btn-block btn-warning">
                        Upload Sekarang
                    </a>
                    <a href="<?= site_url('User/Home') ?>" class="btn btn-block btn-outline-warning">
                        Upload Nanti
                    </a>
                </div>
                <div class="p-3">
                    <p class="text-secondary">* Jika Anda sudah melakukan Upload Bukti Bayar. Anda akan melihat status Belum Bayar berubah menjadi <i>Menunggu Verifikasi Penjual</i></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================