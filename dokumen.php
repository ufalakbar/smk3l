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
				<div class="col-lg-12">
					<h4>QRM : <?php echo $pageTitle; ?></h4>
		            <div class="box-body">
		              <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                  <tr>
		                      <th>No</th>
		                      <th>Nama Dokumen</th>
		                      <th>Nomor</th>
		                      <th>Tanggal Disahkan</th>
		                      <!--<th>Kategori Dokumen</th>
		                      <th>Status</th> -->
		                      <th>Link Download</th>
		                  </tr>
		                  </thead>
		                  <tbody>                            
		                      <?php
		                        $no=1;
		                        if(isset($data_dokumen)){
		                           foreach($data_dokumen as $row){
		                      ?>
		                      <tr>
		                       <td><?php echo $no++; ?></td>
		                       <td>
		                          <a href="">
		                          <?php echo $row->nm_dokumen; ?>
		                          </a>
		                        </td>
		                       <td><?php echo $row->no_dokumen; ?></td>
		                       <td><?php echo $row->tgl_sah_dokumen; ?></td>
		                       <!--<td><?php echo $row->nm_kategori_dokumen; ?></td>
		                       <td><?php echo $row->status_dokumen; ?></td> -->
		                       <td><a href="#" data-toggle="modal" data-target="#myModal<?php echo $row->id_dokumen; ?>">Download</a></td>
		                      </tr>
		                      <?php }
		                        }
		                      ?>
		                  </tbody>
		              </table>
		            </div>
					<?php
					$no=1;
					if(isset($data_dokumen)){
					   foreach($data_dokumen as $row){
					?>
					<!-- Modal -->
					<div id="myModal<?php echo $row->id_dokumen; ?>" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Download Dokumen <?php echo $row->nm_dokumen; ?></h4>
					      </div>
					      <form target="_blank" method="post" action="<?php echo base_url('loginc/download_dokumen/'.$row->file_dokumen.'/'.$row->id_kategori_dokumen) ?>">
						      <div class="modal-body">
						      	<input type="text" name="username" class="form-control" placeholder="Username">
						      	<br>
						      	<input type="password" name="password" class="form-control" placeholder="password">
						      </div>
						      <div class="modal-footer">
						        <button type="submit" class="btn btn-default">Download</button>
						        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						      </div>					      	
					      </form>
					    </div>

					  </div>
					</div>
					<?php }
					}
					?>
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
