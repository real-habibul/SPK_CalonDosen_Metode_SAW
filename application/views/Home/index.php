<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  function path_adm(){
    echo base_url()."assets/css/";
  }

  function path_adm_plugin(){
    echo base_url()."assets";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>POLINEMA &mdash; Penerimaan Dosen Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?=path_adm_plugin()?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?=path_adm_plugin()?>/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/aos.css">

    <link rel="stylesheet" href="<?=path_adm_plugin()?>/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">POLINEMA</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Timeline</a></li>
                <li><a href="#programs-section" class="nav-link">About</a></li>
                <li><a href="#teachers-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Apply Now</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('http://localhost:82/spk/assets/images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="row align-items-center">
                  <h1  data-aos="fade-up" data-aos-delay="100" class="text-center">PENDAFTARAN CALON DOSEN BARU POLITEKNIK NEGERI MALANG JURUSAN TEKNOLOGI INFORMASI 2019</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa nulla sed quis rerum amet natus quas necessitatibus.</p>

                </div>
                <div class="row align-items-center">
                   <p data-aos="fade-up" data-aos-delay="300"><a href="#contact-section" class="btn btn-primary py-3 px-5 btn-pill">Apply Now</a></p>
                </div>

                <!-- <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Sign Up</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Addresss">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group mb-4">
                      <input type="password" class="form-control" placeholder="Re-type Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
                    </div>
                  </form>

                </div> -->
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Timeline</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="<?=path_adm_plugin()?>/images/img_1.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
              <!--   <span class="course-price">$20</span> -->
                <div class="meta"><span class="icon-clock-o"></span>8 Agustus 2019 / 3 hari</div>
                <h3><a href="#">Registrasi Calon Dosen</a></h3>
                <p>Pendaftaran data diri dari calon dosen baru </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <!-- <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div> -->
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="<?=path_adm_plugin()?>/images/img_2.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
               <!--  <span class="course-price">$99</span> -->
                <div class="meta"><span class="icon-clock-o"></span>11 Agustus 2019 / 3 hari</div>
                <h3><a href="#">Penguploadan Berkas</a></h3>
                <p>Penguploadan kebutuhan dokumen yang diperlukan sebagai syarat </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <!-- <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div> -->
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="<?=path_adm_plugin()?>/images/img_3.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <!-- <span class="course-price">$99</span> -->
                <div class="meta"><span class="icon-clock-o"></span>14 Agustus 2018 / 1 hari</div>
                <h3><a href="#">Hasil Pengumuman Seleksi</a></h3>
                <p>Pengumuman hasil seleksi calon dosen baru yang lolos dapat dilihat di website ini juga di email masing-masing peserta yang telah mendaftar </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <!-- <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div> -->
              </div>
            </div>



            <!-- <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$20</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Study Law of Physics</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Logo Design Course</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">JS Programming Language</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 2,193 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div> -->

          </div>

         

        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Campus</h2>
            <p>Politeknik Negeri Malang, atau yang lebih dikenal dengan nama POLINEMA adalah Perguruan Tinggi Negeri Vokasi di kota Malang. Pendidikan vokasi adalah Pendidikan Tinggi program diploma yang menyiapkan Mahasiswa untuk pekerjaan dengan keahlian terapan tertentu sampai program sarjana terapan dan dapat dikembangkan oleh Pemerintah sampai program magister terapan atau program doktor terapan.</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="<?=path_adm_plugin()?>/images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">We Are Excellent In Education</h2>
            <p class="mb-4">Dengan sistem pendidikan yang fokus pada mempersiapkan lulusan yang terampil dan memiliki kompetensi yang dibutuhkan industry, POLINEMA menerapkan sistem pendidikan yang terdiri dari 40% teori dan 60% praktek melalui Kurikulum Berbasis Kompetensi 5+1 untuk mahasiswa Diploma III, dan 7+1 bagi mahasiswa Diploma IV Sarjanan Terapan).</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="<?=path_adm_plugin()?>/images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Strive for Excellent</h2>
            <p class="mb-4">Saat ini POLINEMA memberikan beragam pilihan jurusan dan program studi, baik bidang rekayasa maupun tata niaga, yang terdiri dari 7 jurusan dengan 29 program studi pilihan. 12 program studi Diploma IV (Sarjana Terapan)*), 12 program studi Diploma III, 3 program studi Diploma III PSDKU Kediri, dan 2 program studi Magister Terapan.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="<?=path_adm_plugin()?>/images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Education is life</h2>
            <p class="mb-4">POLINEMA juga membuka kelas Internasional pada 5 Program Studi. Selain itu POLINEMA merupakan salah satu Politeknik yang terakreditasi A (Unggul) dan satu satunya Politeknik yang berstatus Satker BLU.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Contact</h2>
            <p class="mb-5">Jika ada pertanyaan lebih lanjut mengenai syarat dan ketentuan mengikuti Rekrutmen Dosen Baru Politeknik Negeri Malang. Anda dapat menghubungi nomor di bawah ini.</p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="<?=path_adm_plugin()?>/images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Ahmad Habibul Ulum</h3>
                <p class="position">Staff Teknis</p>
                <p>089123321123</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="<?=path_adm_plugin()?>/images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Ferdiana</h3>
                <p class="position">Staff Kepegawaian</p>
                <p>081789987789</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="<?=path_adm_plugin()?>/images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Bu Meyti</h3>
                <p class="position">Staff Administrasi</p>
                <p>083123456765</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('http://localhost:82/spk/assets/images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="<?=path_adm_plugin()?>/images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Bapak Awang</h3>
            <blockquote>
              <p>&ldquo; Selaku Guru Besar Atau Rektor Politeknik Negeri Malang &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="<?=path_adm_plugin()?>/images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="<?=path_adm_plugin()?>/images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">150 Universities Worldwide</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Top Professionals in The World</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Expand Your Knowledge</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Best Teachers</h3></div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="<?=path_adm_plugin()?>/images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    



    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">


            
            <h2 class="section-title mb-3">Formulir Pendaftaran</h2>
            <p class="mb-5">Isikan informasi yang dibutuhkan untuk formulir pendaftaran dengan lengkap</p>
          
            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" id="name" class="form-control" placeholder="Nama Lengkap">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="number" id="usia" class="form-control" placeholder="Usia (dalam tahun)">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" id="pendidikan_terakhir" class="form-control" placeholder="Pendidikan terakhir">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" id="tempat_pendidikan" class="form-control" placeholder="Tempat Pendidikan">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="pengalaman_kerja" cols="30" rows="10" placeholder="Pengalaman Kerja"></textarea>
                </div>
              </div>

              

                  <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" id="status_pernikahan" class="form-control" placeholder="Status Pernikahan">
                </div>
                <div class="col-md-6">
                  <input type="number" id="jarak" class="form-control" placeholder="Jarak (dalam KM)">
                </div>
              </div>
               <div class="form-group row">
                <div class="col-md-12">
                 <select class="form-control" id="is_active">
                            <option value="1">Aktif</option>
                            <option value="0">Non aktif</option>
                        </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Submit" onclick="tambah()">
                </div>
              </div>
<script src="<?=base_url()?>public/bootstrap/js/jquery.js"></script>
              <script>
                function tambah(){
                    var name = $('#name').val();
                    var usia = $('#usia').val();
                    var pendidikan_terakhir = $('#pendidikan_terakhir').val();
                    var tempat_pendidikan = $('#tempat_pendidikan').val();
                    var pengalaman_kerja = $('#pengalaman_kerja').val();
                    var status_pernikahan = $('#status_pernikahan').val();
                    var jarak = $('#jarak').val();
                    var is_active = $('#is_active').val();
                    if(name==''){
                        $.notify('Name is required', "warn");
                    }else if(usia==''){
                        $.notify('Usia is required', "warn");
                    }else if(pendidikan_terakhir==''){
                        $.notify('Pendidikan Terakhir is required', "warn");
                     }else if(tempat_pendidikan==''){
                        $.notify('Tempat Pendidikan is required', "warn");
                     }else if(pengalaman_kerja==''){
                        $.notify('Pengalaman Kerja is required', "warn");
                     }else if(status_pernikahan==''){
                        $.notify('Status Pernikahan is required', "warn");
                     }else if(jarak==''){
                        $.notify('Jarak is required', "warn");
                    }else{
                        $.ajax({
                            type:"POST",
                            url:"<?=base_url()?>Home/saveCalonPegawai",
                            data:{name:name, usia:usia,pendidikan_terakhir:pendidikan_terakhir,tempat_pendidikan:tempat_pendidikan,pengalaman_kerja:pengalaman_kerja,status_pernikahan:status_pernikahan,jarak:jarak,is_active:is_active},
                            cache:false,
                            success:function(a){
                                if(a=='failed'){
                                    $.notify('failed to save data', "warn");
                                }else if(a=='available'){
                                    $.notify('id is already used', "warn");
                                }else{
                                    $.notify("Successfully saved data", "success");
                                    setTimeout(function () {
                                        $.notify("Please wait 3 seconds to refresh the page", "info");
                                    }, 2000);
                                    setTimeout(function () {
                                        location.reload();
                                    }, 5000);
                                }
                            },
                            error: function () {
                                $.notify("Refresh this page and try again", "error");
                            }
                        });
                    }
                }
            </script>

            </form>
          </div>
        </div>
      </div>
    </div>
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Polinema</h3>
            <p>Politeknik Negeri Malang, atau yang lebih dikenal dengan nama POLINEMA adalah Perguruan Tinggi Negeri Vokasi di kota Malang.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Timeline</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h3>Referensi</h3>
            <p>Saat ini Politeknik Negeri Malang sedang membutuhkan tenaga pengajar baru untuk ikut membantu Politeknik Negeri Malang mencetak pelajar berprestasi yang ikut berkontribusi dalam kemajuan Indonesia</p>
            <form action="#" class="footer-subscribe">
              <!-- <div class="d-flex mb-5"> -->
                <div class="row align-items-center">
                   <p data-aos="fade-up" data-aos-delay="300"><a href="<?=base_url()?>index.php/Login" class="btn btn-primary py-3 px-5 btn-pill">Login Staff</a></p>
                </div>
              <!-- </div> -->
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div> <!-- .site-wrap -->

  <script src="<?=path_adm_plugin()?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/jquery-ui.js"></script>
  <script src="<?=path_adm_plugin()?>/js/popper.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/bootstrap.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/owl.carousel.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/jquery.stellar.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/jquery.countdown.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/jquery.easing.1.3.js"></script>
  <script src="<?=path_adm_plugin()?>/js/aos.js"></script>
  <script src="<?=path_adm_plugin()?>/js/jquery.fancybox.min.js"></script>
  <script src="<?=path_adm_plugin()?>/js/jquery.sticky.js"></script>

  
  <script src="<?=path_adm_plugin()?>/js/main.js"></script>
    
  </body>
</html>