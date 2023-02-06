<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Data User</h3>
      </div>
    </div>
    <?php if($this->session->flashdata('info')): ?>
     <div class="alert alert-success fade in"><?php echo $this->session->flashdata('info'); ?></div>
   <?php endif; ?>
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_pin_alt"></i> Id</th>
                <th><i class="icon_mobile"></i> Username</th>
                <th><i class="icon_pin_alt"></i> Nama Lengkap</th>
                <th><i class="icon_pin_alt"></i> No Telpon</th>
                <th><i class="icon_mail_alt"></i> Tanggal Lahir</th>
              </tr>
              <tr>
            </tbody>
            <!-- ambil semua data tabel user -->
            <tbody>
              <?php 
                foreach ($user as $row) {
              ?>
                  <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['nama_lengkap'] ?></td>
                    <td><?php echo $row['no_tlp'] ?></td>
                    <td><?php echo $row['tgl_lahir'] ?></td>
                  </tr>

              <?php } ?>
            </tbody>
          </table>
        </section>
      </div>
    </div>
  </section>
</section>