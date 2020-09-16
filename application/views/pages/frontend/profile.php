	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i></a></li>
					<li class="active"><?php echo $this->uri->segment(1) ?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#">PT INTI PERSERO</a></h3>
							</div>
							<div align="center">
						        <div id="main-slider" class="main-slider flexslider">
						            <ul class="slides">
						              <?php if (isset($data_media)) {
						              	foreach ($data_media as $row) {
						              	 	if ($row->tempat_media == 'Profile Perusahaan') { ?>
								              <li>
								                <img src="<?php echo base_url('uploads/img/'.$row->file_media)?>" alt="" />
								              </li>
						              	<?php }
						              	}
						              } ?>
						            </ul>
						        </div>
								<!-- end slider -->
							</div>
						</div>
						<div align="justify">
							<?php echo config_web('about') ?>							
						</div>
				</article>
				<div class="clear"></div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<h5 class="widgetheading">Navigasi</h5>
					<ul class="cat">
						<li><i class="fa fa-angle-right"></i><a href="#">Narasi Tentang QRM</a></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Struktur Organisasi QRM</a></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Profile Personalia QRM</a></li>
					</ul>
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>