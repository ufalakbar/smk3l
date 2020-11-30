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
            <form role="form" method="post" action="<?php echo base_url('dokumenc/proses_data_dokumen')?>"  enctype= "multipart/form-data">
              <div class="box-body ">
                <?php if (isset($id)) { ?>
                  <input name="id_dokumen" type="hidden" class="form-control" value="<?php echo $id; ?>" readonly>

                  <div class="form-group col-md-12">
                    <label>No Dokumen</label>
                    <input name="no_dokumen" type="text" class="form-control" placeholder="No Dokumen" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Nama Dokumen</label>
                    <input name="nm_dokumen" type="text" class="form-control" placeholder="Nama Dokumen" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Dokumen</label>
                   
                    <input name="file_dokumen" type="file" class="form-control" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Kategori Dokumen</label>
                    <select name="id_kategori_dokumen" class="form-control" required>
                        <?php if (isset($data_kategori_dokumen)) {
                          foreach ($data_kategori_dokumen as $row) {
                          echo option_value_dokumen ($row->id_kategori_dokumen) ;?>
                        <?php }
                        } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Status</label>
                    <select name="status_dokumen" class="form-control" required>
                      <option value="Draft">Draft</option>
                      <option value="Publish">Publish</option>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Tanggal Sah</label>
                    <input name="tgl_sah_dokumen" type="date" class="form-control" placeholder="tgl_sah_dokumen " required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Tanggal Kadaluarsa</label>
                    <input name="tgl_kadaluarsa" type="date" class="form-control" placeholder="tgl_kadaluarsa" required>
                  </div>
                <?php } else { ?>
                  <?php
                    $no=1;
                    if(isset($data_dokumen)){
                       foreach($data_dokumen as $row){

                        $id_kategori_dokumen = $row->id_kategori_dokumen;
                        $no_dokumen = $row->no_dokumen;
                        $nm_dokumen = $row->nm_dokumen;
                        $file_dokumen = $row->file_dokumen;
                        $tgl_sah_dokumen = $row->tgl_sah_dokumen;
                        $tgl_kadaluarsa = $row->tgl_kadaluarsa;
                        $status_dokumen = $row->status_dokumen;
                  ?>
                  <input name="id" type="hidden" class="form-control" value="<?php echo $row->id_dokumen; ?>" readonly>

                  <div class="form-group col-md-12">
                    <label>No Dokumen</label>
                    <input name="no_dokumen" type="text" class="form-control" value="<?php echo $row->no_dokumen ?>" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Nama Dokumen</label>
                    <input name="nm_dokumen" type="text" class="form-control" value="<?php echo $row->nm_dokumen; ?>">
                  </div>

                  <div class="form-group col-md-12">
                    <label>Status</label>
                    <select name="status_dokumen" class="form-control" required>
                      <option value="<?php echo $row->status_dokumen; ?>"><?php echo $row->status_dokumen; ?></option>
                      <option value="Draft">Draft</option>
                      <option value="Publish">Publish</option>
                    </select>
                  </div>


                  <div class="form-group col-md-12">
                    <label>Tanggal Sah</label>
                    <input name="tgl_sah_dokumen" type="date" class="form-control" value="<?php echo $row->tgl_sah_dokumen; ?>">
                  </div>
                  <div class="form-group col-md-12">
                    <label>Tanggal Kadaluarsa</label>
                    <input name="tgl_kadaluarsa" type="date" class="form-control" value="<?php echo $row->tgl_kadaluarsa; ?>">
                  </div>
                  <?php }
                    }
                  ?>
                <?php } ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('dokumenc/data_dokumen')?>" type="button" class="btn btn-warning">Kembali</a>
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
