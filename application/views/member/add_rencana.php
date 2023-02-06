<main id="main" class="main">
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-files-o"></i> Tambah Data Rencana</h3>
			</div>
		</div>
		<!-- Form validations -->
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<div class="panel-body">
						<div class="form">
							<form class="form-validate form-horizontal" id="feedback_form" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/kota/insertRencana') ?>">
								<?php echo validation_errors(); ?>
								<div class="form-group ">
									<label for="cname" class="control-label col-lg-2">Judul Perjalanan <span class="required"></span></label>
									<div class="col-lg-10">
										<input class="form-control" id="cname" name="judul_perjalanan" type="text" value="<?php echo set_value('nama_tempat'); ?>">
									</div>
								</div>
								<div class="form-group ">
									<label for="calamat" class="control-label col-lg-2">Tanggal <span class="required"></span></label>
									<div class="col-lg-10">
										<input class="form-control" id="calamat" name="tanggal" type="date" value="<?php echo set_value('alamat'); ?>">
									</div>
								</div>
								<div class="form-group ">
									<label for="cmaps" class="control-label col-lg-2">Tempat wisata <span class="required"></span></label>
									<!-- list wisata dari database -->
									<div class="col-lg-10">
										<select class="form-control" id="cmaps" name="id_tempat_wisata" type="text" value="<?php echo set_value('tempat_wisata'); ?>">
											<option value="0">Pilih Tempat Wisata</option>
											<?php foreach ($wisata->result() as $row) { ?>
												<option value="<?php echo $row->id; ?>"><?php echo $row->nama_tempat; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group ">
									<label for="cdeskripsi" class="control-label col-lg-2">Catatan <span class="required"></span></label>
									<div class="col-lg-10">
										<textarea class="form-control " id="cdeskripsi" type="text" name="catatan"><?php echo set_value('deskripsi'); ?></textarea>
									</div>
								</div>
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-primary" type="submit" name="submit">Tambah</button>
								</div>
						</div>
						</form>
					</div>
				</section>
	</section>
</section>

</main>
