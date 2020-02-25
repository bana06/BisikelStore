	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop</h1>
					<nav class="d-flex align-items-center">
						<a href="<?= site_url('User/Home') ?>">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop</a>
						<!-- <a href="category.html">Fashon Category</a> -->
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
					<?php
						foreach ($getBrand as $q) :
					?>
						<li class="main-nav-list">
							<a href="<?= site_url('User/Merk/getProdukByMerk/').$q->id_brand ?>" aria-expanded="false" aria-controls="fruitsVegetable" class=" <?= ($this->uri->segment(4) == $q->id_brand)? "text-warning" : "" ?>">
								<span class="lnr lnr-arrow-right"></span><?= $q->brand ?>
								<!-- <span class="number">(53)</span> -->
							</a>
						</li>
					<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php
							foreach ($brg as $q) :
						?>
						<div class="col-lg-3 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="<?= site_url('assets/img/barang/').$q->photo_brg ?>" width="150px" height="200px">
								<div class="product-details">
									<h6><?= $q->nama_brg ?></h6>
									<div class="price">
										<h6>Rp <?= $q->harga_brg ?></h6>
										<!-- <h6 class="l-through">$210.00</h6> -->
									</div>
									<div class="prd-bottom ">
										<?php
											if ($this->session->userdata('fullname') != NULL) {
												echo '<a href="'.site_url('User/Produk/detail/').$q->id_brg.'" class="social-info">
													<span class="ti-bag"></span>
													<p class="hover-text" style="font-size: 10px">add to cart</p>
												</a>';
											} else {
												echo '<a href="'.site_url('Auth/login').'" class="social-info">
													<span class="ti-bag"></span>
													<p class="hover-text" style="font-size: 10px">add to cart</p>
												</a>';
											}
											
										?>
										<!-- <a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a> -->
										<!-- <a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a> -->
										<!-- <a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a> -->
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>

						
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<!-- <div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div> -->
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>


	<!-- Modal Quick Product View -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="container relative">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="product-quick-view">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="quick-view-carousel">
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
								<div class="item" style="background: url(img/organic-food/q1.jpg);">

								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="quick-view-content">
								<div class="top">
									<h3 class="head">Mill Oil 1000W Heater, White</h3>
									<div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">$149.99</span></div>
									<div class="category">Category: <span>Household</span></div>
									<div class="available">Availibility: <span>In Stock</span></div>
								</div>
								<div class="middle">
									<p class="content">Mill Oil is an innovative oil filled radiator with the most modern technology. If you are
										looking for something that can make your interior look awesome, and at the same time give you the pleasant
										warm feeling during the winter.</p>
									<a href="#" class="view-full">View full Details <span class="lnr lnr-arrow-right"></span></a>
								</div>
								<div class="bottom">
									<div class="color-picker d-flex align-items-center">Color:
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
										<span class="single-pick"></span>
									</div>
									<div class="quantity-container d-flex align-items-center mt-15">
										Quantity:
										<input type="text" class="quantity-amount ml-15" value="1" />
										<div class="arrow-btn d-inline-flex flex-column">
											<button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
											<button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
										</div>

									</div>
									<div class="d-flex mt-20">
										<a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
										<a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>