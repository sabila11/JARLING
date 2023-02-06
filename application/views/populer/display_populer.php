<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Tempat Populer</h3>
      </div>
    </div>
    <?php if($this->session->flashdata('info')): ?>
     <div class="alert alert-success fade in"><?php echo $this->session->flashdata('info'); ?></div>
   <?php endif; ?>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <table class="table table-striped table-advance table-hover">
            <a class="btn btn-primary" href="<?php echo base_url();?>index.php/populer/tambah_data"><i class="icon_plus_alt2"></i> Tambah</a>
            <tbody>
              <tr>
                <th><i class="icon_pin_alt"></i> Id</th>
                <th><i class="icon_mobile"></i> Nama Tempat</th>
                <th><i class="icon_pin_alt"></i> Alamat</th>
                <th><i class="icon_calendar"></i> Tanggal</th>
                <th><i class="icon_mail_alt"></i> Deskripsi</th>
                <th><i class="icon_cogs"></i> Gambar 100x100</th>
                <th><i class="icon_cogs"></i> Gambar 640x426</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
              <tr>
            </tbody>
            <tbody>
              <?php 
                foreach ($populer as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama_tempat'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['tanggal'] ?></td>
                    <td><?php 
                          $deskripsi = $row['deskripsi'];
                          $potong = substr($deskripsi,0, 50);
                          echo $potong;
                        ?></td>
                    <td><?php echo $row['gambar_kecil'] ?></td>
                    <td><?php echo $row['gambar_besar'] ?></td>
                    <td>
                      <a class="btn btn-success" href="<?php echo base_url('index.php/populer/edit_populer/'.$row['id']);?>"><i class="icon_check_alt2"></i> Edit</a>
                      <a class="btn btn-danger" href="<?php echo base_url('index.php/populer/hapus_populer/'.$row['id']);?>" onClick="return confirm('yakin ingin menghapus ?')"><i class="icon_close_alt2"></i> Hapus</a>
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