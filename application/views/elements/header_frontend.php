
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo config_web('nameweb') ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url('uploads/img/'.config_web('icon')) ?>" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url()?>templates/css/animate.css">
    <link rel="stylesheet" href="<?= base_url()?>templates/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>templates/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url()?>templates/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url()?>templates/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url()?>templates/css/style.css">
  </head>
  <body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand " href="http://smk3.inti.net/">SMK3L</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url() ?>">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo base_url('Team_QRM') ?>">Profile QRM</a>
                  <a class="dropdown-item" href="<?php echo base_url('Organisasi_QRM') ?>">Struktur Organisasi</a>
                  <a class="dropdown-item" href="<?php echo base_url('Kontak_QRM') ?>">Kontak Kami</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo base_url('External') ?>">Berita Eksternal</a>
                  <a class="dropdown-item" href="<?php echo base_url('Berita') ?>">Berita Internal</a>
                  <a class="dropdown-item" href="http://jaring.inti.net/modules.php?op=modload&name=News&file=index">Jaring INTI</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dokumen</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0033') ?>">Sasaran & Program Kerja K3L</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0034') ?>">Peratuan Perundang-undangan</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0035') ?>">Perizinan</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0036') ?>">Sertifikat</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0037') ?>">Daftar Induk Dokumen</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0038') ?>">Daftar Rekaman Dokumen</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0039') ?>">Prosedur</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0026') ?>">Petunjuk Kerja</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0027') ?>">IBPR</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0028') ?>">Form Risalah</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0029') ?>">Kebijakan dan Sasaran</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0030') ?>">SKD/KN</a>
                  <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0031') ?>">UU dan Permen</a>
                   <a class="dropdown-item" href="<?php echo base_url('Dokumen/index/KD-0032') ?>">Aspek Lingkungan</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laporan</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo base_url('Laporan/index/KL-0001') ?>">Laporan Kegiatan</a>
                  <a class="dropdown-item" href="<?php echo base_url('Laporan/index/KL-0002') ?>">Laporan Kecelakaan</a>
                  <a class="dropdown-item" href="<?php echo base_url('Laporan/index/KL-0003') ?>">Investigasi Kejadian</a>
                  <a class="dropdown-item" href="<?php echo base_url('Laporan/index/KL-0004') ?>">Laporan Bulanan</a>
                  <a class="dropdown-item" href="<?php echo base_url('Laporan/index/KL-0005') ?>">Laporan Inpeksi K3L</a>
                  <a class="dropdown-item" href="<?php echo base_url('Laporan/index/KL-0006') ?>">Laporan Hasil Audit</a>
                  <a class="dropdown-item" href="<?php echo base_url('Laporan/index/KL-0007') ?>">Laporan Kejadian Kasus</a>

                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="<?php echo base_url('Foto') ?>">Foto</a>
                  <a class="dropdown-item" href="<?php echo base_url('Video') ?>">Video</a>
                  
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Buku') ?>">Buku Panduan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('Covid') ?>">Covid-19</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.google.com/maps/place/PT+INTI+(Persero)/@-6.9382888,107.6049756,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e89a850f0c27:0xf966f17f27fca922!8m2!3d-6.9382941!4d107.6071643" target="_blank"
                class="text-primary"> Maps </a>
              </li>
        
            </ul>

          
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->