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
                        <label class="h2">TAMBAH ALAMAT PENGIRIMAN</label>
                    </div>
                    <form action="<?= site_url('User/Cart/tambahAlamat/').$id_user ?>" method="POST">
                        <div class="form-group">
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="float-right">
                            <a href="<?= site_url('User/Cart') ?>" class="btn btn-secondary">Batalkan</a>
                            <button type="submit" class="btn btn-success">Tambah Alamat</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================