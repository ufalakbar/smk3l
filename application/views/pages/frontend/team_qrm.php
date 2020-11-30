	<div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('templates/images/hero_2.jpg'); ">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Tentang Kami</span></h1>
              <p class="mb-5 w-75 pl-0">Profile QRM</p>
            </div>
          </div>
        </div>

    </div>
    </div>
    <!-- END slider -->
    </div>
	<br>
	<h1 style="color: #ff5000" align="center">QUALITY RISK MANAGEMENT</h1>
	

	<section id="content" >
	<div class="container">
		<div class="row">
			<div class="col-lg">
				<article>
						<div class="post-image">
							<div align="center">
						        <div id="main-slider" class="main-slider flexslider">
						            <ul class="slides">
						            	<?php if (isset($data_media)) {
											foreach ($data_media as $row) {
												if ($row->tempat_media == 'Narasi Tentang QRM') { ?>
												<li>
													<img src="<?php echo base_url('uploads/img/'.$row->file_media)?>" alt="" style="margin-right: 10%"/>
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
							<?php echo config_web('narasi_qrm') ?>							
						</div>
				</article>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	</section>