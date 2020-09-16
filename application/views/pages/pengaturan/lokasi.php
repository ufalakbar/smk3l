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
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $formTitle; ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('pengaturanc/proses_data_lokasi')?>"  enctype= "multipart/form-data">
              <div class="box-body ">

                  <?php
                    $no=1;
                    if(isset($data_config)){
                       foreach($data_config as $row){
                  ?>
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                      <h4>lokasi Settings</h4>
                    </div>
                    <div class="form-group col-md-12">
                      <label>lokasi</label>
                      <input name="google_maps" type="text" class="form-control" value="<?php echo $row->google_maps ?>" required>
                    </div>
                    <div class="form-group col-md-12">
                      <div align="center">
                        <iframe src="<?php echo $row->google_maps;?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
                        </iframe>
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
