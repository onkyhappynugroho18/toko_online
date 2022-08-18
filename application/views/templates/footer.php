<!-- start footer area -->
<footer class="footer-area-content">

	<div class="container">
		<div class="footer-wrapper style-3">
			<div class="type-1">
				<div class="footer-columns-entry">
							<div class="copyright">Created with by <a target="_blank">Coba Ganti Tampilan</a> . All right reserved</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>



</footer>
<!-- footer area end -->


<!-- All script -->
<script src="<?php echo base_url('js/vendor/jquery-1.10.2.min.js') ?>"></script>
<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('js/smoothscroll.js')?>"></script>
<!-- Scroll up js
============================================ -->
<script src="<?php echo base_url('js/jquery.scrollUp.js')?>"></script>
<script src="<?php echo base_url('js/menu.js')?>"></script>


<script src="<?php echo base_url('js/pluginse209.js?v=1.0.0')?>"></script>

<!-- Magnific Popup -->
<script src="<?php echo base_url('js/jquery.magnific-popup.min.js')?>"></script>

<script src="<?php echo base_url('js/jquery.countdown.min.js')?>"></script>


<script src="<?php echo base_url('js/jquery.scrolly.js')?>"></script>


<!-- External libraries: jQuery & GreenSock -->
<script src="<?php echo base_url('layerslider/js/greensock.js" type="text/javascript')?>"></script>
<!-- LayerSlider script files -->
<script src="<?php echo base_url('layerslider/js/layerslider.transitions.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('layerslider/js/layerslider.kreaturamedia.jquery.js')?>" type="text/javascript"></script>


<!-- Owl carousel -->
<script src="<?php echo base_url('js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('js/main.js')?>"></script>



<script type="text/javascript">
	$(document).ready(function() {

		"use strict";

		//** Slider  **//
		jQuery("#layerslider").layerSlider({
			responsive: true,
			responsiveUnder: 1170,
			layersContainer: 1170,
			skin: 'v5',
			hoverPrevNext: true,
			navPrevNext: true,
			navStartStop: false,
			navButtons: false,
			skinsPath: 'layerslider/skins/'
		});


		/*=================== Parallax ===================*/
		$('.parallax').scrolly({bgParallax: true});


		/* Owl carousel */
		$(".owl-carousel").owlCarousel({
			slideSpeed : 500,
			rewindSpeed : 1000,
			mouseDrag : true,
			stopOnHover : true
		});
		/* Own navigation */
		$(".owl-nav-prev").click(function(){
			$(this).parent().next(".owl-carousel").trigger('owl.prev');
		});
		$(".owl-nav-next").click(function(){
			$(this).parent().next(".owl-carousel").trigger('owl.next');
		});


	});
</script>


</body>


</html>