<header class="header_area sticky-header">
	<div class="main_menu">
		<nav class="navbar navbar-expand-lg navbar-light main_box">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="<?= site_url('User/Home') ?>"><img src="<?= site_url('assets/User/') ?>img/logo.png" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item <?= ($this->uri->segment(2) == 'Home')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('User/Home') ?>">Home</a></li>

						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							 aria-expanded="false">MERK</a>
							<ul class="dropdown-menu ">
								
									<li class="nav-item"><a class="nav-link" href="<?= site_url('') ?>">Pacific</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= site_url('') ?>">Polygon</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= site_url('') ?>">United</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= site_url('') ?>">Santa Cruz</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= site_url('') ?>">GT</a></li>
								
							</ul>
						</li>

						<li class="nav-item <?= ($this->uri->segment(2) == 'Category')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('User/Category') ?>">Shop</a></li>
						<!-- <li class="nav-item submenu dropdown"> -->
							<!-- <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" -->
							 <!-- aria-expanded="false">Shop</a> -->
							<!-- <ul class="dropdown-menu"> -->
								<!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('User/Category') ?>">Shop Category</a></li> -->
								<!-- <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li> -->
								<!-- <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li> -->
								<!-- <li class="nav-item"><a class="nav-link" href="<?= site_url('User/Cart') ?>">Shopping Cart</a></li> -->
								<!-- <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li> -->
							<!-- </ul>
						</li> -->
						<li class="nav-item <?= ($this->uri->segment(2) == 'Contact')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('User/Contact') ?>">Contact</a></li>
					
						<!-- <li class="nav-item <?= ($this->uri->segment(2) == 'Cart')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('User/Cart') ?>">Cart</a></li> -->
						<li class="nav-item <?= ($this->uri->segment(2) == 'Transaksi')? 'active' : '' ?>"><a class="nav-link" href="<?= site_url('User/Transaksi') ?>">Transaksi</a></li>

						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							 aria-expanded="false"><span class="ti-user"></span></a>
							<ul class="dropdown-menu ">
								<?php
									if ($this->session->userdata('email') != NULL) { 
								?>
									<li class="nav-item"><a class="nav-link" href="#"><?= $this->session->userdata('fullname'); ?></a></li>
									<li class="nav-item"><a class="nav-link" href="<?= site_url('Auth/logout') ?>">Logout</a></li>		
								<?php 
									} else {
								?>
									<li class="nav-item"><a class="nav-link" href="<?= site_url('Auth/login') ?>">Login</a></li>
									<li class="nav-item"><a class="nav-link" href="<?= site_url('Auth/register') ?>">Register</a></li>
								<?php
									}
								?>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="nav-item">
							<?php
								if ($this->session->userdata('fullname') != NULL) {
									echo '<a href="'.site_url('User/Cart').'" class="cart">
										<span class="ti-bag" style="color:red"></span>
										<label style="color:red">'.$countCart.'</label>
									</a>';
								} else {
									echo '<a href="'.site_url('User/Cart').'" class="cart">
										<span class="ti-bag"></span>
									</a>';
								}
								
							?>
						</li>
						<!-- <li class="nav-item">
							<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- <div class="search_input" id="search_input_box">
		<div class="container">
			<form class="d-flex justify-content-between">
				<input type="text" class="form-control" id="search_input" placeholder="Search Here">
				<button type="submit" class="btn"></button>
				<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
			</form>
		</div>
	</div> -->
</header>