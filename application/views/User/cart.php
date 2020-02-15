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
                            <th scope="col">No</th>
                            <th scope="col">Produk</th>
                            <th scope="col">harga</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($cart as $q) :
                        ?>
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
                                <h5>Rp <?= $q->harga_brg ?></h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="<?= $q->jumlah_pesanan ?>" title="Quantity:"
                                        class="input-text qty">
                                    <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button> -->
                                </div>
                            </td>
                            <td>
                                <h5>Rp <?= $q->total ?></h5>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">&times</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="5">
                                <p class="float-right">
                                </p>
                                <p class="float-right mr-3">
                                    *Tombol Update Cart untuk mengganti jumlah barang yang dipesan. 
                                    Tombol Checkout untuk melanjutkan step pembayaran.
                                </p>
                            </td>
                        </tr>
                        <tr class="bottom_button">
                            <td colspan="5">
                                <a class="btn btn-primary click-btn float-right" href="#">Checkout</a>
                                <a class="gray_btn float-right mr-3" href="#">Update Cart</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================