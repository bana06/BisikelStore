<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<?= $header ?>
</head>

<body>

	<!-- Start Header Area -->
	<?= $topbar ?>
	<!-- End Header Area -->

	<!-- content start -->
                  <?= $this->session->flashdata('message'); ?>
	
	<?= $content ?>
	<!-- end content -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Ini adalah Website yang dibangun oleh 2 programmer junior dari SMKN 3 Banjar,
							yaitu Sabana Nur Rizki Hermawan dan Ari Aryansyah. Website ini dibangun dengan tujuan memenuhi tugas dari seorang Guru IT.
						</p>
					</div>
				</div>
				<div class="col-lg-1  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<!-- <h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>
 -->
									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								<!-- </div>
								<div class="info"></div>
							</form>
						</div>
-->					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="<?= site_url('assets/User/') ?>img/i1.jpg" alt=""></li>
							<li><img src="<?= site_url('assets/User/') ?>img/i2.jpg" alt=""></li>
							<li><img src="<?= site_url('assets/User/') ?>img/i3.jpg" alt=""></li>
							<li><img src="<?= site_url('assets/User/') ?>img/i4.jpg" alt=""></li>
							<li><img src="<?= site_url('assets/User/') ?>img/i5.jpg" alt=""></li>
							<li><img src="<?= site_url('assets/User/') ?>img/i6.jpg" alt=""></li>
							<li><img src="<?= site_url('assets/User/') ?>img/i7.jpg" alt=""></li>
							<li><img src="<?= site_url('assets/User/') ?>img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Bisikel Store
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="<?= site_url('assets/User/') ?>js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?= site_url('assets/User/') ?>js/vendor/bootstrap.min.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/jquery.nice-select.min.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/jquery.sticky.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/nouislider.min.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/countdown.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
	<script src="<?= site_url('assets/User/') ?>js/gmaps.min.js"></script>
	<script src="<?= site_url('assets/User/') ?>js/main.js"></script>
</body>

</html>