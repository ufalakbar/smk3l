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
            <form role="form" method="post" action="<?php echo base_url('mediac/proses_data_media')?>"  enctype= "multipart/form-data">
              <div class="box-body ">
                <?php if (isset($id)) { ?>
                  <input name="id_media" type="hidden" class="form-control" value="<?php echo $id; ?>" readonly>

                  <div class="form-group col-md-12">
                    <label>File</label>
                    <input name="file_media" type="file" class="form-control" placeholder="Nama Kategori Berita" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Tempat Media</label>
                    <select name="tempat_media" class="form-control" required>
                        <option value="Cover Depan">Cover Depan</option>
                        <option value="Profile Perusahaan">Profile Perusahaan</option>
                        <option value="Narasi Tentang QRM">Narasi Tentang QRM</option>
                        <option value="Struktur Organisasi QRM">Struktur Organisasi QRM</option>
                        <option value="Personalia QRM">Personalia QRM</option>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Status</label>
                    <select name="status_media" class="form-control" required>
                      <option value="Draft">Draft</option>
                      <option value="Publish">Publish</option>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Keterangan</label>
                    <textarea id="editor1" name="keterangan_media" rows="10" cols="80"></textarea>
                  </div>
                <?php } else { ?>
                  <?php
                    $no=1;
                    if(isset($data_media)){
                       foreach($data_media as $row){

                        $id_media = $row->id_media;
                        $tempat_media = $row->tempat_media;
                        $keterangan_media = $row->keterangan_media;
                        $status_media = $row->status_media;
                        $file_media = $row->file_media;

                  ?>

                  <input name="id" type="hidden" class="form-control" value="<?php echo $row->id_media; ?>" readonly>
                  <div class="col-md-12">
                    <div class="form-group col-md-12">
                      <label>Cover (Pilih Jika diubah)</label>
                      <input name="file_media" type="file" class="form-control">
                    </div>                    
                  </div>
                  <br>
                  <div class="col-md-12">
                    <img width="100%" src="<?php echo base_url('uploads/img/'.$file_media)?>">
                  </div>
                  <br>
                  <div class="col-md-12">
                    <div class="form-group col-md-6">
                      <label>Kategori Berita</label>
                      <select name="tempat_media" class="form-control" required>
                        <option value="<?php echo $tempat_media ?>"><?php echo $tempat_media ?></option>
                        <option value="Cover Depan">Cover Depan</option>
                        <option value="Profile Perusahaan">Profile Perusahaan</option>
                        <option value="Narasi Tentang QRM">Narasi Tentang QRM</option>
                        <option value="Struktur Organisasi QRM">Struktur Organisasi QRM</option>
                        <option value="Personalia QRM">Personalia QRM</option>
                      </select>
                    </div>

                    <div class="form-group col-md-6">
                      <label>Status</label>
                      <select name="status_media" class="form-control" required>
                        <option value="<?php echo $status_media ?>"><?php echo $status_media ?></option>
                        <option value="Draft">Draft</option>
                        <option value="Publish">Publish</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label>About</label>
                    <textarea id="editor1" name="keterangan_media" rows="10" cols="80"><?php echo $keterangan_media ?></textarea>
                  </div>

                  <?php }
                    }
                  ?>
                <?php } ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('mediac')?>" type="button" class="btn btn-warning">Kembali</a>
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
