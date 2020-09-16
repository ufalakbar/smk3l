<div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('templates/images/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Media</span></h1>
              <p class="mb-5 w-75 pl-0">video</p>
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
            
          </ul>
        </div>
      </div>
    </div>
  </section>

      <section id="inner-headline">
    <div class="container">
      <div class="container marginbot50">
      <div id="grid-container" class="cbp-l-grid-projects">
     
      <div class="gallery">
      <div class="row">

      <?php if (isset($data_video)) {
      foreach ($data_video as $row) { ?>
        <div class="col-sm-3" style="align-items: center;">
      <div class="cbp-item <?php echo $row->id_video ?>">
      
      <div class="cbp-caption">
      <div class="cbp-caption-defaultWrap">
      <video width="248" height="300" controls autoplay>
      <source src="<?php echo base_url('uploads/berkas/'.$row->file_video)?>" type="video/mp4"; />
      </video> 
      </div><!-- cbp-caption-defaultWrap -->
      <div class="cbp-caption-activeWrap">
      <div class="cbp-l-caption-alignCenter">
      <div class="cbp-l-caption-body">
      <center>
      <a href="<?php echo base_url('uploads/berkas/'.$row->file_video)?>" class="cbp-lightbox cbp-l-caption-buttonRight">Download</a> </center>
      </div><!-- cbp-l-caption-body -->
      </div><!-- cbp-l-caption-alignCenter -->
      <center>
      <div class="cbp-l-grid-projects-title"><?php echo $row->nm_video ?></div></center>
      </div><!-- cbp-caption-activeWrap -->
      </div><!-- cbp-caption -->
      </div><!-- cbp-item -->
    </div>
      <?php }
      } ?>
      </div><!-- row -->
      </div><!-- gallery -->
     <!-- responsive -->
      </div><!-- grid container -->
      </div><!-- container marginbot50 -->
      
      </div>
    </section>
