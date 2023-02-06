<!-- banner -->
<div class="banner">
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-w3lsrow"> 
				<!-- sidebar menu cool  animasi to down-->
				<div class="sidebar">
					<div class="toggle"></div>
					<ul class="w3nav">
						<li><a href="<?php echo base_url();?>" class="active"> Home</a></li>
						<!-- wisata -->
						<li><a href="<?php echo base_url();?>index.php/wisatawisata">Wisata</a></li>
						<li><a href="<?php echo base_url();?>index.php/login">Login</a></li>				
					</ul>
					<div class="clearfix"> </div>
				</div>
				<br>

				<div class="logo">
					<h1><a href="<?php echo base_url();?>">JARLING</a></h1>
				</div>  
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //header --> 
	<!-- banner-text -->
	<div class="banner-text"> 
		<div class="container">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-w3lstext">
							<h2>Jawa Barat Healing</h2>
							<p>Selamat datang di website baru kami, disini kami akan memberikan informasi mengenai tempat-tempat wisata yang ada didaerah Jawa Barat.</p>
						</div>
					</li>
				</ul> 
			</div> 	
			<!-- FlexSlider --> 
			<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
			<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			</script>
			<!-- End-slider-script -->
		</div>
	</div>
	<!-- //banner-text --> 
</div>
<!-- //banner -->
