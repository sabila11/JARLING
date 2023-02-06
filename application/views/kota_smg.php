<!-- banner -->
<div class="banner w3about">
<!-- header -->
<div class="header">
	<div class="container">
		<div class="header-w3lsrow"> 
			<div class="menu"> 
				<div class="toggle"></div> 
				<ul class="w3nav">
					<li><a href="<?php echo base_url();?>"> Home</a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pilih <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url();?>index.php/wisatawisata" class="active">Jarling</a></li>
							  
						</ul>
					</li> 
				</ul>
				<div class="clearfix"> </div>
			</div> 
			<div class="logo">
				<h1><a href="<?php echo base_url();?>">JARLING</a></h1>
			</div>  
			<div class="header-right">   
				<form class="navbar-form navbar-left" action="<?php echo base_url();?>index.php/cari/hasil_kota" method="post"> 
					<div class="form-group w3-agile"><input class="form-control" name="nama_tempat" placeholder="Nama tempat"></div> 
					<button type="submit" class="btn btn-primary">Search</button> 
				</form> 
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //header --> 
<!-- banner-text -->
<div class="banner-text"> 
	<div class="container"> 
		<div class="banner-w3lstext">
			<h2>Daftar Tempat Wisata</h2>
		</div> 	 
	</div>
</div>
<!-- //banner-text --> 
</div>
<!-- //banner -->
<!-- gallery -->
<div class="gallery">
	<div class="container">  
		<div class="gallery-grids-top">
			<div class="gallery-grids">

				<?php foreach ($wisata->result() as $row) { ?>

				<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"> 
					<h1><span class="label label-default"><?php echo $row->nama_tempat;?></span></h1>
					<img class="example-image img-responsive" src="<?php echo base_url().'assets/images/wisata/'.$row->foto_utama;?>" alt=""/>
					<h2><?php 
							echo anchor('info_kota/info/'.$row->id,'<span class="label label-info">Informasi',array());
						?></span></h2>
					<p>--------------------------</p>
				</div>

				<?php } ?>

				<div class="clearfix"> </div>
				<script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>	
			</div> 
		</div>
	</div>
</div>
