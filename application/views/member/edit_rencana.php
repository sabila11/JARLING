<section id="main-content">
  <section class="wrapper">
  <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Data</h3>
  </div>
  </div>
  <!-- Form validations -->
  <div class="row">
  <div class="col-lg-12">
  <section class="panel">
    <div class="panel-body">
      <div class="form">
        <?php if ($dataEdit) {
            $id = $dataEdit->id;
            $nama_tempat = $dataEdit->nama_tempat;
            $alamat = $dataEdit->alamat;
            $maps = $dataEdit->maps;
            $deskripsi = $dataEdit->deskripsi;
            $gambar = $dataEdit->foto_utama;
            $foto1 = $dataEdit->foto1;
            $foto2 = $dataEdit->foto2;
            $foto3 = $dataEdit->foto3;
          }else{
            $nama_tempat = "";
            $alamat = "";
            $maps = "";
            $deskripsi = "";
            $gambar = "";
            $foto1 = "";
            $foto2 = "";
            $foto3 = "";
          } ?>
        <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?php echo base_url('index.php/kota/update/'.$id) ?>">
          <?php echo validation_errors(); ?>
           <div class="form-group ">
            <label for="cname" class="control-label col-lg-2">Nama Tempat <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cname" name="nama_tempat" type="text" value="<?php echo $nama_tempat ?>">
            </div>
          </div>
           <div class="form-group ">
            <label for="calamat" class="control-label col-lg-2">Alamat <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="calamat" name="alamat" type="text" value="<?php echo $alamat ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cmaps" class="control-label col-lg-2">Maps <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cmaps" name="maps" type="text" value="<?php echo $maps ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cdeskripsi" class="control-label col-lg-2">Deskripsi <span class="required"></span></label>
            <div class="col-lg-10">
              <textarea class="form-control " id="cdeskripsi" type="text" name="deskripsi"><?php echo $deskripsi ?></textarea>
            </div>
          </div>
          <div class="form-group ">
            <label for="cgambar" class="control-label col-lg-2">Foto Utama <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cgambar" name="foto_utama" type="text" value="<?php echo $gambar ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cfoto1" class="control-label col-lg-2">Foto 1 <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cfoto1" name="foto1" type="text" value="<?php echo $foto1 ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cfoto2" class="control-label col-lg-2">Foto 2 <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cfoto2" name="foto2" type="text" value="<?php echo $foto2 ?>">
            </div>
          </div>
          <div class="form-group ">
            <label for="cfoto3" class="control-label col-lg-2">Foto 3 <span class="required"></span></label>
            <div class="col-lg-10">
              <input class="form-control" id="cfoto3" name="foto3" type="text" value="<?php echo $foto3 ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button class="btn btn-primary" type="submit" name="submit">Update</button>
            </div>
          </div>
        </form>
      </div>
  </section>
</section>