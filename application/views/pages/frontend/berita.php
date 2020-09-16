<div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('<?= base_url()?>templates/images/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Berita</span></h1>
              <p class="mb-5 w-75 pl-0">Internal</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END slider -->
    </div>
<br>

	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i></a></li>
					<li class="active">Berita</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php if (isset($data_berita)) {
					foreach ($data_berita as $row) {
						if ($row->status_berita == 'Publish') { ?>
						<article>
								<div class="post-image">
									<div class="post-heading">
										<h3><a href="#"><?php echo $row->title_berita ?></a></h3>
									</div>
									<div align="center">
										<img src="<?php echo base_url('uploads/img/'.$row->cover_berita) ?>" alt="" class="img-responsive" />	
									</div>
								</div>
								<?php echo limit_words($row->desk_berita, 40) ?> ....
								<div class="bottom-article">
									<ul class="meta-post">
										<li><i class="fa fa-calendar"></i><a href="#"> <?php echo $row->tgl_berita ?></a></li>
										<li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
										<li><i class="fa fa-folder-open"></i><a href="<?php echo base_url('Berita/kategori/'.$row->id_kategori_berita) ?>"> <?php echo $row->nm_kategori_berita ?></a></li>
										<li><i class="fa fa-comments"></i><a href="#"> Komentar</a></li>
									</ul>
									<a href="<?php echo base_url('Berita/detail_berita/'.$row->id_berita) ?>" class="readmore pull-right">Lanjutkan membaca <i class="fa fa-angle-right"></i></a>
								</div>
						</article>

				<?php } 
					}
				} ?>
				<div class="clear"></div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<h5 class="widgetheading">Kategori Berita</h5>
					<ul class="cat">
						<?php if (isset($data_kategori)) {
							foreach ($data_kategori as $row) { ?>
							<li><i class="fa fa-angle-right"></i><a href="<?php echo base_url('Berita/kategori/'.$row->id_kategori_berita) ?>"><?php echo $row->nm_kategori_berita ?></a></li>

						<?php }
						} ?>
					</ul>
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>