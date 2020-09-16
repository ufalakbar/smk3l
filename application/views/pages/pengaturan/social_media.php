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
            <form role="form" method="post" action="<?php echo base_url('pengaturanc/proses_data_social_media')?>">
              <div class="box-body ">

                  <?php
                    $no=1;
                    if(isset($data_config)){
                       foreach($data_config as $row){
                  ?>
                  <div class="col-md-6">
                    <div class="form-group col-md-12">
                      <h4>Social Media Settings</h4>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Facebook</label>
                      <input name="facebook" type="text" class="form-control" value="<?php echo $row->facebook; ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label>Twitter</label>
                      <input name="twitter" type="text" class="form-control" value="<?php echo $row->twitter; ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label>Google Plus</label>
                      <input name="google_plus" type="text" class="form-control"  value="<?php echo $row->google_plus; ?>">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Instagram</label>
                      <input name="instagram" type="text" class="form-control"  value="<?php echo $row->instagram; ?>">
                    </div>
                    <div class="form-group col-md-12">
                      <label>YouTube</label>
                      <input name="youtube" type="text" class="form-control"  value="<?php echo $row->youtube; ?>">
                    </div> 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group col-md-12">
                      <h4>Notice</h4>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="alert alert-warning"><label>Important</label><hr>Silahkan cantumkan alamat sosial media yang valid <br> Contohnya seperti <i>https://github.com/alldie1207</i>. <br> Karena fitur ini di integrasikan langsung menggunakan API Server.<br><br>Jika terjadi kesulitan anda dapat menghubungi contact : <i>dieabra@gmail.com</i></div>
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
