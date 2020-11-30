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
            <form role="form" method="post" action="<?php echo base_url('beritac/proses_data_berita')?>"  enctype= "multipart/form-data">
              <div class="box-body ">
                <?php if (isset($id)) { ?>
                  <input name="id_berita" type="hidden" class="form-control" value="<?php echo $id; ?>" readonly>

                  <div class="form-group col-md-12">
                    <label>Title</label>
                    <input name="title_berita" type="text" class="form-control" placeholder="title_berita" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Cover</label>
                    <small>Spesifikasi (format: jpg/png, size: 500x375)</small>
                    <input name="cover_berita" type="file" class="form-control" placeholder="Nama Kategori Berita" required>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Kategori Berita</label>
                    <select name="id_kategori_berita" class="form-control" required>
                      <?php if (isset($data_kategori_berita)) {
                        foreach ($data_kategori_berita as $row) { ?>
                          <option value="<?php echo $row->id_kategori_berita ?>"><?php echo $row->nm_kategori_berita ?></option>
                      <?php }
                      } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Status</label>
                    <select name="status_berita" class="form-control" required>
                      <option value="Draft">Draft</option>
                      <option value="Publish">Publish</option>
                    </select>
                  </div>

                  <div class="form-group col-md-12">
                    <label>Keywords (Example : News Update)</label>
                    <input name="keyword_berita" type="text" class="form-control" placeholder="keyword_berita " required>
                  </div>
                  <div class="form-group col-md-12">
                    <label>About</label>
                    <textarea id="editor1" name="desk_berita" rows="10" cols="80"></textarea>
                  </div>
                <?php } else { ?>
                  <?php
                    $no=1;
                    if(isset($data_berita)){
                       foreach($data_berita as $row){

                        $status_berita = $row->status_berita;
                        $id_kategori_berita = $row->id_kategori_berita;
                        $nm_kategori_berita = $row->nm_kategori_berita;
                        $keyword_berita = $row->keyword_berita;
                        $desk_berita = $row->desk_berita;
                        $cover_berita = $row->cover_berita;
                  ?>
                  <input name="id" type="hidden" class="form-control" value="<?php echo $row->id_berita; ?>" readonly>
                  <div class="col-md-6">
                    <div class="form-group col-md-12">
                      <label>Title</label>
                      <input name="title_berita" type="text" class="form-control" value="<?php echo $row->title_berita; ?>" required>
                    </div>

                    <div class="form-group col-md-12">
                      <label>Cover (Pilih Jika diubah)</label>
                      <input name="cover_berita" type="file" class="form-control">
                      <img src="<?php echo base_url('uploads/img/'.$cover_berita) ?>">                      
                    </div>                    
                  </div>
                  <div class="col-md-6">
                    <div class="form-group col-md-12">
                      <label>Kategori Berita</label>
                      <select name="id_kategori_berita" class="form-control" required>
                        <option value="<?php echo $id_kategori_berita ?>"><?php echo $nm_kategori_berita ?></option>
                        <?php if (isset($data_kategori_berita)) {
                          foreach ($data_kategori_berita as $row) { ?>
                            <option value="<?php echo $row->id_kategori_berita ?>"><?php echo $row->nm_kategori_berita ?></option>
                        <?php }
                        } ?>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label>Status</label>
                      <select name="status_berita" class="form-control" required>
                        <option value="<?php echo $status_berita ?>"><?php echo $status_berita ?></option>
                        <option value="Draft">Draft</option>
                        <option value="Publish">Publish</option>
                      </select>
                    </div>

                    <div class="form-group col-md-12">
                      <label>Keywords (Example : News Update)</label>
                      <input name="keyword_berita" type="text" class="form-control" value="<?php echo $keyword_berita ?>" required>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label>About</label>
                    <textarea id="editor1" name="desk_berita" rows="10" cols="80"><?php echo $desk_berita; ?></textarea>
                  </div>
                  <?php }
                    }
                  ?>
                <?php } ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('beritac/data_berita')?>" type="button" class="btn btn-warning">Kembali</a>
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
