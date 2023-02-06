<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Jarling</h3>
      </div>
    </div>
    <?php if($this->session->flashdata('info')): ?>
     <div class="alert alert-success fade in"><?php echo $this->session->flashdata('info'); ?></div>
   <?php endif; ?>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <a class="btn btn-primary" href="<?php echo base_url();?>index.php/kota/tambah_data"><i class="icon_plus_alt2"></i> Tambah</a>
          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_pin_alt"></i> Id</th>
                <th><i class="icon_mobile"></i> Nama Tempat</th>
                <th><i class="icon_pin_alt"></i> Alamat</th>
                <th><i class="icon_pin_alt"></i> Maps</th>
                <th><i class="icon_mail_alt"></i> Deskripsi</th>
                <th><i class="icon_cogs"></i> Foto Utama</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
              <tr>
            </tbody>

            <!-- ambil semua data wisata -->
            <tbody>
              <?php 
                foreach ($wisata as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama_tempat'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['maps'] ?></td>
                    <td><?php echo $row['deskripsi'] ?></td>
                    <td><?php echo $row['foto_utama'] ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/kota/edit_kota/<?php echo $row['id']; ?>"><i class="icon_plus_alt2"></i> Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url();?>index.php/kota/hapus_kota/<?php echo $row['id']; ?>"><i class="icon_close_alt2"></i> Delete</a>
                      </div>
                    </td>
                  </tr>

              <?php } ?>
            </tbody>
          </table>
        </section>
      </div>
    </div>
  </section>
</section>
