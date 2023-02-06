<section id="main-content">
  <section class="wrapper">
  <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Tambah Data</h3>
  </div>
  </div>
  <!-- Form validations -->
  <div class="row">
  <div class="col-lg-12">
  <section class="panel">
    <div class="panel-body">
      <div class="form">
        <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url('index.php/populer/insert') ?>">
          <?php echo validation_errors(); ?>
          <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Nama Tempat <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cname" name="nama_tempat" type="text" value="<?php echo set_value('nama_tempat'); ?>">
            </div>
          </div>
           <div class="form-group ">
            <label for="calamat" class="control-label col-lg-2">Alamat <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="calamat" name="alamat" type="text" value="<?php echo set_value('alamat'); ?>">
            </div>
          </div>
           <div class="form-group ">
            <label for="ctanggal" class="control-label col-lg-2">Tanggal <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="ctanggal" name="tanggal" type="date" value="<?php echo set_value('tanggal'); ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cdeskripsi" class="control-label col-lg-2">Deskripsi <span class="required"></span></label>
            <div class="col-lg-10">
              <textarea class="form-control " id="cdeskripsi" type="text" name="deskripsi"><?php echo set_value('deskripsi'); ?></textarea>
            </div>
          </div>
          <div class="form-group ">
            <label for="cgambar1" class="control-label col-lg-2">Gambar 100x100 <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cgambar1" name="gambar_kecil" type="text" value="<?php echo set_value('gambar_kecil'); ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cgambar2" class="control-label col-lg-2">Gambar 640x426 <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cgambar2" name="gambar_besar" type="text" value="<?php echo set_value('gambar_besar'); ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-primary" type="submit" name="submit">Tambah</button>
            </div>
          </div>
        </form>
      </div>
  </section>
</section>