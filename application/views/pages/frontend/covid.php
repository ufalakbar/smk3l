	<div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('templates/images/hero_2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Covid-19 </span></h1>
              <p class="mb-5 w-75 pl-0">Informasi Penyebaran dan Pencegahan Covid-19</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    <br><br>
    <section id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="solidline">
          <?php
          $readAPI = file_get_contents('https://api.kawalcorona.com/indonesia/');
          $data = json_decode($readAPI, true); ?>
          <style type="text/css">
            .box{
              padding: 30px 40px;
              border-radius: 5px;
            }
          </style>
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="bg-danger box text-white">
                  <div class="row">
                    <div class="col-md-6">
                      <h5>Positif</h5>
                      <h2 id="data-kasus"><?php echo $data['0']['positif']; ?></h2>
                      <h5>Orang</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="bg-warning box text-white">
                  <div class="row">
                    <div class="col-md-6">
                      <h5>Sembuh</h5>
                      <h2 id="data-kasus"><?php echo $data['0']['sembuh']; ?></h2>
                      <h5>Orang</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="bg-dark box text-white">
                  <div class="row">
                    <div class="col-md-6">
                      <h5 style="color: white">Meninggal</h5>
                      <h2 id="data-kasus" style="color: white"><?php echo $data['0']['meninggal']; ?></h2>
                      <h5 style="color: white">Orang</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Pembuatan Tabel Data Covid -->
          <br>
          <h2 align="center">Kasus Covid-19 di Indonesia</h2>
          <?php
          $readAPIprov = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
          $dataProv = json_decode($readAPIprov, true); ?>

          <table class="table table-bordered">
            <thead>
              <th>No</th>
              <th>Provinsi</th>
              <th>Positif</th>
              <th>Sembuh</th>
              <th>Meninggal</th>
            </thead>
            <tbody>
              <?php
                $a=1;
                foreach ($dataProv as $value) :
              ?>
              <tr>
                <td style="color: #FF5000"><?php echo $a++; ?></td>
                <td style="color: #FF5000"><?php echo $value['attributes']['Provinsi']; ?></td>
                <td style="color: #FF5000"><?php echo $value['attributes']['Kasus_Posi']; ?></td>
                <td style="color: #FF5000"><?php echo $value['attributes']['Kasus_Semb']; ?></td>
                <td style="color: #FF5000"><?php echo $value['attributes']['Kasus_Meni']; ?></td>
              </tr>
              <?php
                endforeach;
              ?>
            </tbody>
          </table>



          </div>
        </div>
      </div>
    </div>
  </section>

