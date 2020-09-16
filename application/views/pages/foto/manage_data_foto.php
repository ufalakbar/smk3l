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
            <form role="form" method="post" action="<?php echo base_url('fotoc/proses_data_foto')?>"  enctype= "multipart/form-data">
              <div class="box-body ">
                <?php if (isset($id)) { ?>
                  <input name="id_foto" type="hidden"  class="form-control" value="<?php echo $id; ?>" readonly>

                  <div class="form-group col-md-12">
                    <label>Nama foto</label>
                    <input name="nm_foto" type="text" class="form-control" placeholder="Nama foto" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>foto</label>
                    <input name="file_foto" type="file" class="form-control" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Status</label>
                    <select name="status_foto" class="form-control" required>
                      <option value="Draft">Draft</option>
                      <option value="Publish">Publish</option>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Tanggal</label>
                    <input name="tgl_foto" type="date" class="form-control" required>
                  </div>

                <?php } else { ?>
                  <?php
                    $no=1;
                    if(isset($data_foto)){
                       foreach($data_foto as $row){

                        $nm_foto = $row->nm_foto;
                        $file_foto = $row->file_foto;
                        $status_foto = $row->status_foto;
                  ?>
                  <input name="id" type="hidden" class="form-control" value="<?php echo $row->id_foto; ?>" readonly>
                  <div class="form-group col-md-12">
                    <label>Nama foto</label>
                    <input name="nm_foto" type="text" class="form-control" value="<?php echo $row->nm_foto; ?>">
                  </div>
                  <div class="form-group col-md-12">
                    <label>File</label>
                    <a href="<?php echo base_url('uploads/berkas/'.$row->file_foto) ?>">Download</a>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Status</label>
                    <select name="status_foto" class="form-control" required>
                      <option value="<?php echo $row->status_foto ?>"><?php echo $row->status_foto ?></option>
                      <option value="Draft">Draft</option>
                      <option value="Publish">Publish</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Tanggal</label>
                    <input name="tgl_foto" type="date" class="form-control" value="<?php echo $row->tgl_foto; ?>">
                  </div>
                  <?php }
                    }
                  ?>
                <?php } ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('fotoc')?>" type="button" class="btn btn-warning">Kembali</a>
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
