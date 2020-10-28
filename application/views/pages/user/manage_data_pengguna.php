  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $headerTitle; ?>
        <small><?php echo $formTitle; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><?php echo $headerTitle; ?></a></li>
        <li class="active"><?php echo $formTitle; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <?php
          $data=$this->session->flashdata('error');
          if($data!=""){ ?>
              <div id="pesan-flash">
                  <div class='alert alert-danger alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <strong> Peringatan ! </strong> <?=$data;?>
                  </div>
              </div>
          <?php } ?>
          
          <?php
          $data2=$this->session->flashdata('sukses');
          if($data2!=""){ ?>
              <div id="pesan-error-flash">
                  <div class='alert alert-success alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <strong>  Sukses ! </strong> <?=$data2;?>
                  </div>
              </div>
          <?php } ?>
          
          <?php
          $data3=$this->session->flashdata('warning');
          if($data3!=""){ ?>
              <div id="pesan-error-flash">
                  <div class='alert alert-warning alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <strong> Peringatan ! </strong> <?=$data3;?>
                  </div>
              </div>
          <?php } ?> 
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $formTitle; ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('karyawan/proses_data_karyawan')?>">
              <div class="box-body ">
                <?php if (isset($id)) { ?>
                  <div class="form-group col-md-12">
                    <label>ID-Karyawan</label>
                    <input name="id_karyawan" type="text" class="form-control" value="<?php echo $id; ?>" readonly>
                  </div>

                  <div class="form-group col-md-12">
                    <label>NIP</label>
                    <input name="nip" type="number" class="form-control" placeholder="Nomor Induk Pegawai" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Nama</label>
                    <input name="nm_karyawan" type="text" class="form-control" placeholder="Nama Karyawan" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Divisi</label>
                    <input name="divisi" type="text" class="form-control" placeholder="Divisi" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Email Kantor</label>
                    <input name="email_karyawan" type="text" class="form-control" placeholder="Email Kantor" required>
                  </div>

                <?php } else { ?>
                  <?php
                    $no=1;
                    if(isset($data_karyawan)){
                       foreach($data_karyawan as $row){
                  ?>
                  <div class="form-group col-md-12">
                    <label>ID-Karyawan</label>
                    <input name="id" type="text" class="form-control" value="<?php echo $row->id_karyawan; ?>" readonly>
                  </div>

                  <div class="form-group col-md-12">
                    <label>NIP</label>
                    <input name="nip" type="text" class="form-control" placeholder="Nomor Induk Pegawai" value="<?php echo $row->nip; ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Nama</label>
                    <input name="nm_karyawan" type="text" class="form-control" placeholder="Nama Karyawan" value="<?php echo $row->nm_karyawan; ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Divisi</label>
                    <input name="divisi" type="text" class="form-control" placeholder="Divisi" value="<?php echo $row->divisi; ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Email Kantor</label>
                    <input name="email_karyawan" type="text" class="form-control" placeholder="Email Kantor" value="<?php echo $row->email_karyawan; ?>">
                  </div>

                  <?php }
                    }
                  ?>
                <?php } ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('karyawan')?>" type="button" class="btn btn-warning">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
