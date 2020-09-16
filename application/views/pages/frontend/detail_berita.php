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
								<div align="justify">
								<?php echo $row->desk_berita ?>									
								</div>
								<div class="bottom-article">
									<ul class="meta-post">
										<li><i class="fa fa-calendar"></i><a href="#"> <?php echo $row->tgl_berita ?></a></li>
										<li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
										<li><i class="fa fa-folder-open"></i><a href="<?php echo base_url('Berita/kategori/'.$row->id_kategori_berita) ?>"> <?php echo $row->nm_kategori_berita ?></a></li>
										<li><i class="fa fa-comments"></i><a href="#">Comments</a></li>
									</ul>
									<a href="<?php echo base_url('Berita/detail_berita/'.$row->id_berita) ?>" class="readmore pull-right">Continue reading <i class="fa fa-angle-right"></i></a>
								</div>
						</article>
					<?php } 
					}
				} ?>
				<div class="comment-area">

					<h4>Comments</h4>
					<?php if (isset($data_komentar_berita)) {
						foreach ($data_komentar_berita as $row) { ?>
						<div class="media">
							<a href="#" class="pull-left"><img src="<?php echo base_url('assets/frontend/img/avatar.png')  ?>" alt="" class="img-circle" /></a>
							<div class="media-body">
								<div class="media-content">
									<h6><span><?php echo $row->tgl_komentar_berita ?></span> <?php echo $row->user_komentar_berita ?></h6>
									<?php echo $row->isi_komentar_berita ?>								
								</div>
							</div>
						</div>
					<?php }
					} ?>					
					<div class="marginbot30"></div>
					<h4>Leave your comment</h4>
					
					
					<form role="form" method="post" action="<?php echo base_url('Berita/proses_input_berita') ?>">
					  <input type="hidden" name="id_berita" value="<?php echo $this->uri->segment(3) ?>">
					  <div class="form-group">
						<input name="user_komentar_berita" type="text" class="form-control" placeholder="* Enter name">
					  </div>
					  <div class="form-group">
						<input name="email_komentar_berita" type="email" class="form-control" placeholder="* Enter email address">
					  </div>
					  <div class="form-group">
						<textarea name="isi_komentar_berita" class="form-control" rows="8" placeholder="* Your comment here"></textarea>
					  </div>
					  <button type="submit" class="btn btn-theme btn-md">Submit</button>
					</form>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<h5 class="widgetheading">Categories</h5>
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