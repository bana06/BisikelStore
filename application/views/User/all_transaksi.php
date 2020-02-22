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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" width="20px" class="text-center">NO</th>
                            <th scope="col" width="120px" class="text-center">PHOTO BUKTI</th>
                            <th scope="col" class="text-center">TANGGAL</th>
                            <th scope="col" class="text-center">TOTAL ITEM</th>
                            <th scope="col" width="150px" class="text-center">TOTAL BAYAR</th>
                            <th scope="col" width="150px" class="text-center">ALAMAT</th>
                            <th scope="col" class="text-center">STATUS TRANSAKSI</th>
                            <th scope="col" width="150px" class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($transaksi as $q) :

                        ?>
                        <form action="<?= site_url('User/Cart/UpdateCart/') ?>" method="POST">
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <div class="d-flex">
                                    <img src="<?= site_url('assets/img/barang/').$q->photo_bukti ?>" width="150px" height="150px">
                                </div>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p><?= $q->tgl ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p><?= $q->total_item ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p><?= $q->total_bayar ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p><?= $q->tgl ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p><?php
                                            if ($q->status_transaksi == 1) {
                                                echo "Belum dibayar";
                                            } else if($q->status_transaksi == 2){
                                                echo "Verifikasi Pembayaran";
                                            } else if($q->status_transaksi == 3){
                                                echo "Pengemasan";
                                            } else if($q->status_transaksi == 4){
                                                echo "Delivery";
                                            }
                                            
                                        ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a class="btn btn-success mb-1 btn-block" href="<?= site_url('User/Transaksi/getView2/').$q->id_order ?>">
                                    <em class="fa fa-dollar"></em> Bayar
                                </a>
                            </td>
                        </tr>
                        </form>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================