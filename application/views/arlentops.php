

<!-- start main content -->
<main class="main-container">

	<!-- new collection directory -->
	<section class="block no-padding">


	<div class="main-slider overlape">
						<div id="full-slider-wrapper">
							<div id="layerslider" style="width:100%;height:450px; ">

								<div class="ls-slide" data-ls="transition3d:all; timeshift:-1000; slidedelay: 7000;">

									<img  src="<?php echo base_url('assets/img/slider1.jpg')?>" class="ls-bg" alt="Slide background"/>

									<div class="ls-slide" style=" font-size:45px; font-weight:900; top:175px; left:30px; text-transform:uppercase; color:#000000;" data-ls="easingin:easeOutBack;  delayin:2000; rotatexin:90; durationin:2000;">Arlen Collections</div>

									<div class="ls-slide" style=" font-size:14px; top:230px; left:70px; color:#000000;" data-ls="easingin:easeOutExpo; delayin:2500; rotatexin:90; durationin:2000;">Gamis, Sweater, Celana, Dll</div>

								</div>
								<!-- Slide 1 -->

								<div class="ls-slide" data-ls="transition3d:all; timeshift:-1000; slidedelay: 7000;">

									<img  src="<?php echo base_url('assets/img/slider2.jpg')?>" class="ls-bg" alt="Slide background"/>

									<i class="ls-slide fa fa-shopping-bag " style=" font-family:fontawesome; font-size:220px; color:#e9e9eb; top:100px; left:800px;" data-ls="easingin:easeOutBack; delayin:500; offsetxin:right; durationin:2000;"></i>

									<div class="ls-slide" style=" font-size:15px; font-weight:300; color:#333333; letter-spacing:3px; top:180px; font-style:italic; left:750px;" data-ls="easingin:easeOutBack; delayin:1000; offsetxin:top; scalexin:1.3; durationin:2000;">Gamis, Sweater, Celana, Dll </div>

									<h4 class="ls-slide" style="font-size:40px;  font-weight:900; top:205px; text-transform:uppercase; left:660px; color:#1c1c1c;" data-ls="easingin:easeOutElastic; offsetxin:-100px; rotatexin:90; delayin:1500; durationin:2000;">Arlen Collections</h4>

								</div>
								<!-- Slide 2 -->

								<div class="ls-slide" data-ls="transition3d:all; timeshift:-1000; slidedelay: 6000;">

									<img  src="<?php echo base_url('assets/img/slider1.jpg')?>" class="ls-bg" alt="Slide background"/>

									<div class="ls-slde" style="color:#333333; font-family:lato; font-size:15px; font-weight:300; top:160px; left:50px; text-transform:uppercase;" data-ls="rotatexin:90; offsetxin:0; delayin:1000; easingin:easeOutElastic; fadein:false; fadeout:false; durationin:2000;">Great Collection</div>

									<div class="ls-slide" style=" font-size:40px; font-weight:900; top:180px; left:50px; text-transform:uppercase; color:#1c1c1c;" data-ls="rotateyin:45; offsetyin:100px; delayin:1500; easingin:easeOutExpo; durationin:2000;">Arlen Collections</div>

									<div class="ls-slide bg-color" style=" top:225px; left:50px; font-size:13px; text-transform:uppercase; color:#ffffff; padding:5px 20px;" data-ls="offsetyin:left; easingin:easeOutElastic; delayin:2000; durationin:2000;">Gamis, Sweater, Celana, Dll</div>
								</div>
								<!-- Slide 3 -->

							</div>
						</div>
					</div><!-- Main Slider -->


	</section>
	<!-- end new collection directory -->

	<!-- Shop Filter
    ============================================= -->
	<section id="shop" class="shop-4 pt-0">
		<div class="container">
			<div class="row">

						
				<!-- Projects Filter
                ============================================= -->
				<div class="col-xs-12 col-sm-12 col-md-12 shop-filter">
					<ul class="list-inline">
						<li>
							<a class="active-filter" href="#" data-filter="*">All Products</a>
						</li>
					</ul>
				</div>
				<!-- .projects-filter end -->
			</div>
			<!-- .row end -->
			
			<!-- Projects Item
            ============================================= -->
			<div id="shop-all" class="row">

			<?php foreach($arlentops as $brg) : ?>
				<!-- Product Item #1 -->
				<div class="col-xs-1 col-sm-8 col-md-3 product-item filter-best">
					<div class="product-img">
						<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="product">
						<div class="product-hover">
							<div class="product-cart">
							<?php echo anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-secondary btn-block">Detail</div>') ?>
							</div>
						</div>
					</div>
					<!-- .product-img end -->
					<div class="product-bio">
						<h4>
							<a><?php echo $brg->nama_brg ?></a><br>
							<small><?php echo $brg->keterangan ?></small>
						</h4>
						<p class="product-price"><strong>Rp. <?php echo number_format($brg->harga, 0,',','.') ?></strong></p>
						<div class="product-cart">
							<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-secondary btn-block">Tambah ke Keranjang</div>') ?>
							</div>
					</div>
					<!-- .product-bio end -->

				</div>
				<!-- .product-item end -->

				
				<!-- .product-item end -->
				<?php endforeach; ?>
			</div>
			<!-- .row end -->

			<!-- .row End -->
		</div>
		<!-- .container end -->
	</section>


	<!-- Start Our Shop Items -->

	<!-- End Our Shop Items -->

	<div class="clearfix"></div>

</main>
<!-- end main content -->