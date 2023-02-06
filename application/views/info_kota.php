<!-- banner-text -->
<div class="banner-text">
	<div class="container">
		<div class="banner-w3lstext">
			<h2>Detail Tempat Wisata</h2>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- short codes -->
<div class="card">
	<div class="container">

		<?php foreach ($wisata->result() as $row) {  ?>

			<div class="grid_3 grid_5 w3">
				<h3 class="w3ls-hdg">
					<?php echo $row->nama_tempat; ?>
				</h3>
				<img class="example-image img-responsive" src="<?php echo base_url() . 'assets/images/wisata/' . $row->foto_utama; ?>" width="400" height="400" alt="" />
				<div class="well w3l">
					<h4>Deskripsi :</h4>
					<?php echo $row->deskripsi; ?>
				</div>
				<div class="well w3l">
					<h4>Alamat :</h4>
					<p><?php echo $row->alamat; ?></p>
					<?php echo $row->maps; ?>
				</div>
			</div>
		<?php } ?>
	</div>
	<!-- tampilkan data ulasan -->
</div>
