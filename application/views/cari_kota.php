<!-- //banner -->
<!-- gallery -->
<div class="container">
	<h3 class="w3agileits-title">Hasil Pencarian</h3>
	<div class="row">
		<div class="col-lg-12">
			<section class="panel">
				<!-- grid data menjadi 3 gambar tiap baris -->
				<div class="row">
					<?php foreach ($result as $row) { ?>
						<div class="col-md-4 col-sm-4 col-xs-6">
							<!-- Card with an image on top -->
							<div class="card">
								<img src="<?php echo base_url() . 'assets/images/wisata/' . $row->foto_utama; ?>" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title"><?php echo $row->nama_tempat; ?></h5>
									<p class="card-text"><?php echo $row->deskripsi; ?></p>
									<a href="<?php echo base_url() . 'info_kota/info/' . $row->id; ?>" class="card-link">Informasi</a>
								</div>
							</div><!-- End Card with an image on top -->
						</div>

					<?php } ?>

				</div>
				<!-- end grid data -->

			</section>
		</div>
	</div>

</div>
