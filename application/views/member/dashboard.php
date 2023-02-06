<main id="main" class="main">
	<section id="main-content">
		<section class="wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-dashboard"></i> Dashboard</h3>
				</div>
			</div>
			<?php if ($this->session->flashdata('info')) : ?>
				<div class="alert alert-success fade in"><?php echo $this->session->flashdata('info'); ?></div>
			<?php endif; ?>
			<div class="row">
				<div class="col-lg-12">
					<section class="panel">
						<!-- grid data menjadi 3 gambar tiap baris -->
						<div class="row">
							<?php foreach ($wisata->result() as $row) { ?>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<!-- Card with an image on top -->
									<div class="card">
										<img src="<?php echo base_url() . 'assets/images/wisata/' . $row->foto_utama; ?>" class="card-img-top" alt="...">
										<div class="card-body">
											<h5 class="card-title"><?php echo $row->nama_tempat; ?></h5>
											<p class="card-text"><?php echo $row->deskripsi; ?></p>
											<a href="<?php echo base_url() . 'index.php/info_kota/info/' . $row->id; ?>" class="card-link">Informasi</a>
										</div>
									</div><!-- End Card with an image on top -->
								</div>
							<?php } ?>
						</div>
						<!-- end grid data -->

					</section>
				</div>
			</div>
		</section>
	</section>

</main>
