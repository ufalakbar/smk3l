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
					<h4>Kertas Kerja</h4>
		            <div class="box-body">
		              <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                  <tr>
		                      <th>No</th>
		                      <th>Nama Kertas Kerja</th>
		                      <!--<th>Kategori Dokumen</th>
		                      <th>Status</th> -->
		                      <th>Link Download</th>
		                  </tr>
		                  </thead>
		                  <tbody>                            
		                      <?php
		                        $no=1;
		                        if(isset($data_kertas_kerja)){
		                           foreach($data_kertas_kerja as $row){
		                      ?>
		                      <tr>
		                       <td><?php echo $no++; ?></td>
		                       <td>
		                          <a href="">
		                          <?php echo $row->nm_kertas_kerja; ?>
		                          </a>
		                        </td>
		                       <td><a href="<?php echo base_url('uploads/berkas/'.$row->file_kertas_kerja) ?>">Download</a></td>
		                      </tr>
		                      <?php }
		                        }
		                      ?>
		                  </tbody>
		              </table>
		            </div>
				</div>
				<div class="col-lg-4">
					<h4>Float image in paragraph</h4>
					<img src="<?php echo base_url('assets/frontend/img/dummies/dummy-1.jpg') ?>" alt="" class="img-responsive pull-left" />
					<p>
						 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam non mod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et eabum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet
					</p>
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
