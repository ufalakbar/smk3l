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
            <form role="form" method="post" action="<?php echo base_url('pengaturanc/proses_data_umum')?>">
              <div class="box-body ">

                  <?php
                    $no=1;
                    if(isset($data_config)){
                       foreach($data_config as $row){
                  ?>
                  <div class="col-md-6">
                    <div class="form-group col-md-12">
                      <h4>General Settings</h4>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Website Name</label>
                      <input name="nameweb" type="text" class="form-control" value="<?php echo $row->nameweb; ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label>Email</label>
                      <input name="email" type="text" class="form-control" value="<?php echo $row->email; ?>">
                    </div>

                    <div class="form-group col-md-12">
                      <label>No Telepon</label>
                      <input name="phone_number" type="number" class="form-control"  value="<?php echo $row->phone_number; ?>">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Fax</label>
                      <input name="fax" type="number" class="form-control"  value="<?php echo $row->fax; ?>">
                    </div>                    
                  </div>
                  <div class="col-md-6">
                    <div class="form-group col-md-12">
                      <h4>Modul SEO (Search Engine Optimization)</h4>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Keywords (Google search keywords)</label>
                      <textarea name="keywords" class="form-control"><?php echo $row->keywords; ?></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label>Metatext (Ex : Description)</label>
                      <textarea name="metatext" class="form-control"><?php echo $row->metatext; ?></textarea>
                    </div>                   
                  </div>
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                      <label>About</label>
                      <textarea id="editor1" name="about" rows="10" cols="80"><?php echo $row->about; ?></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                      <label>Narasi QRM</label>
                      <textarea id="editor2" name="narasi_qrm" rows="10" cols="80"><?php echo $row->narasi_qrm; ?></textarea>
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
