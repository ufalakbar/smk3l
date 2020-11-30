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
          $data2=$this->session->flashdata('message');
          if($data2!=""){ ?>
              <div id="pesan-error-flash">
                  <div class='alert alert-success alert-dismissable'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <strong>  Sukses ! </strong> <?=$data2;?>
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
            <form role="form" method="post" action="<?php echo base_url('pengaturanc/proses_data_icon')?>"  enctype= "multipart/form-data">
              <div class="box-body ">

                  <?php
                    $no=1;
                    if(isset($data_config)){
                       foreach($data_config as $row){
                  ?>
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                      <h4>Icon Settings</h4>
                       <?= $this->session->flashdata('notif'); ?>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Masukkan Icon (Dimensi Gambar: Bebas, Format: JPG atau PNG, Ukuran: Max 1MB)</label>
                      <input name="icon" type="file" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                      <div align="center">
                        <img src="<?php echo base_url('uploads/img/'.$row->icon) ?>">                      
                      </div>
                    </div>
                  </div>
                  <?php }
                    }
                  ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('dashboardc')?>" type="button" class="btn btn-warning">Kembali</a>
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
