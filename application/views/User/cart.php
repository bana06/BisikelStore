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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" width="20px" class="text-center">NO</th>
                            <th scope="col" class="text-center">PRODUK</th>
                            <th scope="col" width="150px" class="text-center">HARGA</th>
                            <th scope="col" width="120px" class="text-center">QTY</th>
                            <th scope="col" width="150px" class="text-center">SUBTOTAL</th>
                            <th scope="col" width="150px" class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($cart as $q) :

                        ?>
                        <form action="<?= site_url('User/Cart/UpdateCart/').$q->id_brg ?>" method="POST">
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="<?= site_url('assets/img/barang/').$q->photo_brg ?>" width="150px" height="150px">
                                    </div>
                                    <div class="media-body">
                                        <p><?= $q->nama_brg ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp<?= $q->harga_brg ?>,00</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <!-- <label for="qty">Quantity:</label> -->
                                    <input type="number" name="jumlah_pesanan" id="sst" maxlength="12" value="<?= $q->jumlah_pesanan ?>" title="Quantity:" class="input-text form-control">
                                </div>
                            </td>
                            <td>
                                <h5>Rp<?= $q->total ?>,00</h5>
                            </td>
                            <td>
                                <a class="btn btn-success mb-1 btn-block" href="<?= site_url('User/Cart/Checkout/').$q->id_brg ?>">
                                    <em class="fa fa-check"></em> Checkout
                                </a>
                                <button class="btn btn-info btn-block" type="submit">Update Cart</button>
                                <a  href="<?= base_url('User/Cart/delete/').$q->id_cart; ?>" class="btn btn-danger btn-block">
                                    <em class="fa fa-trash"></em> Hapus
                                </a>
                            </td>
                        </tr>
                        </form>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="2">
                                <h4 class="text-muted">TOTAL ITEM</h4>
                            </td>
                            <td colspan="2">
                                <h4 class="text-center"><?= $countCart ?></h4>
                            </td>
                            <td colspan="2">
                                <h3 class="text-center">Rp<?= $total ?>,00</h3>
                            </td>
                        </tr>
                        <tr class="bottom_button">
                            <td colspan="6">
                                <a class="btn btn-success click-btn float-right" href="<?= site_url('User/Cart/Checkout') ?>">
                                    <em class="fa fa-check"></em> Checkout
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <p class="float-right">
                                </p>
                                <p class="float-right mr-3">
                                    *Tombol Update Cart untuk mengganti jumlah barang yang dipesan. 
                                    Tombol Checkout untuk melanjutkan step pembayaran.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================