

<body class="style-14 index-3">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!-- Start Loading -->
<section class="loading-overlay">
	<div class="Loading-Page">
		<h1 class="loader">Loading...</h1>
	</div>
</section>
<!-- End Loading  -->

<!-- start header -->
<header>
	<!-- Top bar starts -->
	<div class="top-bar">
		<div class="container">

			<!-- Search section for responsive design -->
			<div class="tb-search pull-left">
				<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
				<div class="b-dropdown-block">

					<form>
						<!-- Input Group -->
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Type Something">
									<span class="input-group-btn">
										<button class="btn btn-color" type="button">Search</button>
									</span>
						</div>
					</form>
					
				</div>
			</div>
			<!-- Search section ends -->

			<div class="clearfix"></div>
		</div>
	</div>

	<!-- Top bar ends -->

	<!-- Header One Starts -->
	<div class="header-1">

		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<!-- Logo section -->
					<div class="logo">
					<img src="<?php echo base_url('assets/img/logo.png') ?>" alt="">	
						<!-- <h1><a href="#">Arlen Collections</a></h1> -->
					</div>
				</div>
				<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
					<!-- Search Form -->
					<div class="header-search">
						<form action="<?php echo base_url('welcome/search') ?>" method="post">
							<!-- Input Group -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Type Something" name="search" autocomplate="off">
										<span class="input-group-btn">
											<button class="btn btn-color" type="submit">Search</button>
										</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Navigation starts -->

		<div class="navi">
			<div class="container">
				<div class="navy">
					<ul>
						<!-- Main menu -->
						<li><a href="<?php echo base_url('welcome') ?>">Home</a>
						</li>

						<li><a href="#">Kategori</a>
							<ul>
								<li><a href="<?php echo base_url('kategori/arlen_tops') ?>">Arlen Tops</a>
								</li>
								<li><a href="<?php echo base_url('kategori/arlen_gamis') ?>">Arlen Gamis</a>
								</li>
								<li><a href="<?php echo base_url('kategori/arlen_bottom') ?>">Arlen Bottom</a>
								</li>
							</ul>
						</li>

						<li><a href="<?php echo base_url('welcome/tentang') ?>">Tentang</a></li>
					</ul>
					<ul class="na navbar-nav navbar-right">
						<li>
                                  <?php
                                  $keranjang = '<div class="btn btn-sm btn-success">Keranjang Belanja : '.$this->cart->total_items(). ' Items</div>'
                                  ?>

                                  <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                    	</li>
					</ul>
					<ul class="na navbar-nav navbar-right">
						<li>
                                <?php if($this->session->userdata('username')) { ?>
                                    <li><div style="padding-top : 8px"><div class="btn btn-light text-light">Selamat Datang, <?php echo $this->session->userdata('username') ?></div></div></li>
                                    <li><?php echo anchor('auth/logout','<div class="btn btn-sm btn-warning">Logout</div>') ?></li>
                                    <?php }else { ?>
                                    <li><?php echo anchor('auth/login','<div class="btn btn-sm btn-warning">Login</div>') ?></li>
                                <?php } ?>
						</li>
                    </ul>
				</div>
				
			</div>
		</div>

		<!-- Navigation ends -->

	</div>

	<!-- Header one ends -->

</header>
<!-- end header -->