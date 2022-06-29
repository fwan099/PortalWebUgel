	<!-- Maquetado de la parte del footer-->
	<section class="box-info-footer">
		<div class="flex-box-info">
			<div class="box-info-item1">
				<ul>
 			  	<li><i class="fa fa-envelope"></i><span>info@ugelyunguyo.edu.pe</span></li>
 			  	<li><i class="fa fa-phone"></i><span>(051) 556143 </span></li>
 			  	<li><i class="fa fa-map-marker"></i><span>Jr. Indepedencia N°1034</span></li>
 			  	<li><i class="fas fa-clock"></i><span>Horario de atencion: Lunes a Viernes de 8:30 a.m. a 5:00 p.m.</span></li>
 			  </ul>
				
			</div>
			<div class="box-info-item2">
				<a href="<?php echo urlsite ?>index.php">
				<div class="logo-footer">
					<img src="<?php echo urlsite ?>/public/img/logo.gif">
				</div>
				</a>
			</div>
			
		</div>
		
	</section>

	<section class="box-footer">
		<div class="footer-flex">
			<div>
				<span>Copyright © 2021, <a href="<?php echo urlsite ?>index.php">Unidad de Gestion Educativa Local Yunguyo</a></span>
			</div>
		</div>
		
	</section>


	


<script  src="<?php echo urlsite ?>public/js/script.js"></script>


      <script src='<?php echo urlsite ?>public/js/jquery-2.2.3.min.js'></script>
      <!-- //js  working-->
     
	<!-- Banner Responsive slider -->
	<script src="<?php echo urlsite ?>public/js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- // Banner Responsive slider -->

      <!--// banner-->
	  <!-- simpleLightbox -->
	<script src="<?php echo urlsite ?>public/js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
<!-- flexSlider -->
	<script defer src="<?php echo urlsite ?>public/js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>

	<!-- //flexSlider -->
<!-- Calendar -->
				<link rel="stylesheet" href="<?php echo urlsite ?>public/css/jquery-ui.css" />
				<script src="<?php echo urlsite ?>public/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!-- odometer-script -->
	<script src="<?php echo urlsite ?>public/js/odometer.js"></script>
	<script>
		window.odometerOptions = {
			format: '(ddd).dd'
		};
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats1').html(25);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats2').html(330);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats3').html(542);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats4').html(222);
		}, 1500);
	</script>
	<!-- //odometer-script -->

      <!-- start-smoth-scrolling -->
      <script  src="<?php echo urlsite ?>public/js/move-top.js"></script>
      <script  src="<?php echo urlsite ?>public/js/easing.js"></script>
      <script >
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         	/*
         		var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear' 
         		};
         	*/
         
         	$().UItoTop({ easingType: 'easeOutQuart' });
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="<?php echo urlsite ?>public/js/bootstrap.js"></script>


<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script src="<?php echo urlsite ?>public/js/paginacion.js"></script>

    


</body>
</html>