<div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('templates/images/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Media</span></h1>
              <p class="mb-5 w-75 pl-0">foto</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br><br>
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="breadcrumb">
            <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
            <li><a href="#"><?php echo $this->uri->segment(1) ?></a><i class="icon-angle-right"></i></li>
            <li class="active">Download</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="content">
    <div class="container">
      <div class="row">
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
        <div class="col-lg-8">
          <h4>foto</h4>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama foto</th>
                          <!--<th>Kategori Dokumen</th>
                          <th>Status</th> -->
                          <th>Link Download</th>
                      </tr>
                      </thead>
                      <tbody>                            
                          <?php
                            $no=1;
                            if(isset($data_foto)){
                               foreach($data_foto as $row){
                          ?>
                          <tr>
                           <td><?php echo $no++; ?></td>
                           <td>
                              <a href="">
                              <?php echo $row->nm_foto; ?>
                              </a>
                            </td>
                           <td><a href="<?php echo base_url('uploads/berkas/'.$row->file_foto) ?>">Download</a></td>
                          </tr>
                          <?php }
                            }
                          ?>
                      </tbody>
                  </table>
                </div>
        </div>
        
        

      <div class="row">
        <div class="col-lg-12">
          <div class="solidline">
          </div>
        </div>
      </div>
    </div>
  </section>
