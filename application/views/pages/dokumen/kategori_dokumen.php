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
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Kategori</th>
                   
                      <th>Deskripsi</th>
                      <th>
                          <div align="center">
                          <a href="<?php echo base_url('dokumenc/manage_data_kategori_dokumen');?>" class="btn btn-default btn-xs"> <i class="fa fa-plus"></i> Tambah
                          </a>
                          </div>
                      </th>
                  </tr>
                  </thead>
                  <tbody>                            
                      <?php
                        $no=1;
                        if(isset($data_kategori_dokumen)){
                           foreach($data_kategori_dokumen as $row){
                      ?>
                      <tr>
                       <td><?php echo $no++; ?></td>
                       <td><?php echo $row->nm_kategori_dokumen; ?></td>
                    
                       <td><?php echo $row->desk_kategori_dokumen; ?></td>
                       <td>
                          <div align="center">
                          <a href="<?php echo base_url('dokumenc/manage_data_kategori_dokumen/'.$row->id_kategori_dokumen);?>" class="btn btn-default btn-xs"> <i class="fa fa-edit"></i> Ubah
                          </a>
                          <a href="<?php echo base_url('dokumenc/proses_hapus_kategori_dokumen/'.$row->id_kategori_dokumen);?>" class="btn btn-default btn-xs"> <i class="fa fa-trash-o"></i> Hapus
                          </a>
                          </div>
                       </td>
                      </tr>
                      <?php }
                        }
                      ?>
                  </tbody>
              </table>
            </div>
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
