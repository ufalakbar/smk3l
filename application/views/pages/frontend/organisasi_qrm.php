	<div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('templates/images/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Tentang Kami</span></h1>
              <p class="mb-5 w-75 pl-0">Struktur Organisasi</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>
	<br><br>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div align="center">
						        <div id="main-slider" class="main-slider flexslider">
						            <ul class="slides">
						              <?php if (isset($data_media)) {
						              	foreach ($data_media as $row) {
						              	 	if ($row->tempat_media == 'Struktur QRM baru') { ?>
								              <li>
								                <img src="<?php echo base_url('uploads/img/'.$row->file_media)?>" alt="" align="center" />
								              </li>
						              	<?php }
						              	}
						              } ?>
						            </ul>
						        </div>
								<!-- end slider -->
							</div>
						</div>
				</article>
				<div class="clear"></div>
			</div>
			
		</div>
	</div>
	</section>