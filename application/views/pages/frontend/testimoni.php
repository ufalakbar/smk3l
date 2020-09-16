	<section class="callaction">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-sm-6 col-md-6">
							<div class="marginbot30"></div>
							<h4>Your Testimoni</h4>
							<form role="form" method="post" action="<?php echo base_url('Testimoni/proses_input_testimoni') ?>">
							  <input type="hidden" name="id_testimoni" value="<?php echo $this->uri->segment(3) ?>">
							  <div class="form-group">
								<input name="user_testimoni" type="text" class="form-control" placeholder="* Enter name">
							  </div>
							  <div class="form-group">
								<input name="corp_testimoni" type="text" class="form-control" placeholder="* Enter Corporation">
							  </div>
							  <div class="form-group">
								<textarea name="isi_testimoni" class="form-control" rows="8" placeholder="* Your Testimonial here"></textarea>
							  </div>
							  <button type="submit" class="btn btn-theme btn-md">Submit</button>
							</form>
						</div>
						<div class="col-sm-6 col-md-6">
						<h4>Testimonials</h4>
							<div class="testimonialslide clearfix flexslider">
								<ul class="slides">
									<?php if (isset($data_testimoni)) {
										foreach ($data_testimoni as $row) { ?>
										<li>
											<blockquote>
											<?php echo $row->isi_testimoni ?>
											</blockquote>
											<h4><?php echo $row->user_testimoni ?> <span>&#8213; <?php echo $row->corp_testimoni ?></span></h4> 
										</li>

									<?php }
									} ?>
								</ul>
							</div>					
						</div>	
					</div>
				</div>
			</div>
		</div>
	</section>