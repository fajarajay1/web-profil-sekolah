<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a54085f5c7.js" crossorigin="anonymous"></script>
    
    <!-- ========== Page Title ========== -->
    <title>SMP Negeri 1 Ciranjang</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="https://smpn1ciranjang.sch.id/media_library/images/87746662d32a4900573146afd5bf5023.png" type="image/x-icon" href="{{ asset('halaman_depan/assets/favicon.ico') }}">

    <!-- ========== Start Stylesheet ========== -->
    <link href="https://www.sman1yogya.sch.id/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/animate.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/style.css" rel="stylesheet">
    <link href="https://www.sman1yogya.sch.id/assets/css/responsive.css" rel="stylesheet" />
    <link href="https://www.sman1yogya.sch.id/assets/css/style2.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <div class="container">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand">
                        <img src="https://smpn1ciranjang.sch.id/media_library/images/87746662d32a4900573146afd5bf5023.png" width="59" height="50" class="logo logo-display img-responsive" alt="Logo"> 
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                        <!-- <li>
                            <a class="smooth-menu" href="">Home</a>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Profil Sekolah</a>
                            <ul class="dropdown-menu">
                                <li><a href="/page/sambutan-kepala-sekolah">Sambutan Kepala Sekolah</a></li>
                                <li><a href="#">Sejarah</a></li>
                                <li><a href="#">Visi & Misi</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Staff</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="smooth-menu" href="#guru">Tenaga Pendidik</a></li>
                                        <li><a href="#">Tenaga Kependidikan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Informasi sekolah</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Berita Terbaru</a></li>
                                <li><a href="#">Info Sekolah</a></li>
                                <li><a href="#">Agenda Sekolah</a></li>
                                <li><a href="#">Artikel</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Ekstrakulikuler</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Drum band</a></li>
                                <li><a href="#">Karate</a></li>
                                <li><a href="#">Palang Merah Remaja (PMR)</a></li>
                                <li><a href="#">Futsal</a></li>
                                <li><a href="#">Communication Class (CC)</a></li>
                                <li><a href="#">Tarung Derajat (Boxer)</a></li>
                                <li><a href="#">Pramuka</a></li>
                                <li><a href="#">Iringan Remaja Masjid (IRMA)</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="smooth-menu" href="/page/prestasi">Prestasi</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Gallery</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Foto</a></li>
                                <li><a href="#">Vidio</a></li>
                            </ul>
                        </li>
                        <li class="header__el header__el--blue">
                            <a href="{{ route('auth') }}" class="btn btn--white">Sign In →</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
<!-- Start Blog
============================================= -->
@foreach ($sambutan as $sambutan)
<div class="blog-area full-blog standard single-blog full-blog padding-page">
    <div class="container">
        <div class="row">
            <div class="blog-items">
                <div class="col-md-10 col-md-offset-1">
                    <br>
                    <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">{{ $sambutan->judul }}</li>
                    </ul>
                </div>
                <div class="blog-content col-md-10 col-md-offset-1">
                    <div class="item-box">
                        <div class="item">
                            <div class="thumb">      
                            <img class="img-responsive" width="100%" src="{{ asset('/image/'.$sambutan->gambar)}}" alt="">
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
<!--                                         <li><a href="#"><i class="fas fa-user"></i> </a></li> -->
                                        <!-- <li><a href="#"><i class="fas fa-comments"></i> 5 Comments</a></li> -->
                                    </ul>
                                </div>
                                <p>{!! $sambutan->isi !!}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- End Blog -->


<!-- Start Footer 
    ============================================= -->
    <footer class="bg-fixed default-padding-top bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <img src="https://pbs.twimg.com/media/F3wR0UNbgAA0Sgh?format=png&name=small" class="logo logo-display img-responsive" alt="Logo"  width="59" height="50">
                            <p>
                                Terwujudnya peserta didik yang unggul, Berakhlak karimah, Cerdas, Sehat, Kompetitif dan Mandiri serta mampu berakselerasi dalam bidang teknologi.
                            </p>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                	<li>
                                        <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item recent-post">
                            <h4>Info Sekolah</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="https://pbs.twimg.com/media/Fqk9LewaEAAMwxd?format=png&name=small" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">PROGRAM KURIKULUM MERDEKA&#8230;</a>
                                    <div class="meta-title">
                                        <span class="post-date">09 Aug, 2023</span>
                                           <p>Yth. Bapak/ Ibu Orang tua/ Wali dan Siswa Kelas V dan VII &#8230;</p>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="https://i.pinimg.com/originals/3c/90/25/3c90256d95f28dfb33306e02e5915ed7.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">DOKUMEN AKADEMIK SEM&#8230;</a>
                                    <div class="meta-title">
                                         <span class="post-date">16 Jul, 2023</span>
                                            <p>Yth. Bapak/ Ibu Orang tua/ Wali dan Siswa Kelas V SMP NEGERI 1 CIRANJANG&#8230;</p>
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item recent-post">
                            <h4>Agenda Sekolah</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="https://www.sman1yogya.sch.id/assets/images/uploads/agenda/f7a13cee2339c4604fe49f9e12f69c36-100x100.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Surat Edaran Kelulusan&#8230;</a>
                                        <div class="meta-title">
                                            <span class="post-date">18 Apr, 2020</span>
                                            <p>Surat Edaran Kelulusan Siswa Kelas VIIs Tahun Ajaran 2019/2020&#8230;</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-responsive" src="https://www.sman1yogya.sch.id/assets/images/uploads/agenda/6c1da5caa5caf36956b66a1aa6c5c928-100x100.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="https://www.sman1yogya.sch.id/id/agenda/detail/2">Pembagian Laporan Hasil&#8230;</a>
                                    <div class="meta-title">
                                        <span class="post-date">13 May, 2019</span>
                                            <p>Pembagian laporan hasil belajar siswa akan dilaksanakan pada&#8230;</p>
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p><a href="#"></a></p>
                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                    <a href="#">Terms of user</a>
                                </li>
                                <li>
                                    <a href="#">License</a>
                                </li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="https://www.sman1yogya.sch.id/assets/js/jquery-1.12.4.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/bootstrap.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/equal-height.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/jquery.appear.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/jquery.easing.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/modernizr.custom.13711.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/owl.carousel.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/wow.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/isotope.pkgd.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/count-to.js"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/bootsnav.js"></script>
	<script src="https://www.sman1yogya.sch.id/assets/js/masonry-docs.min.js?2"></script>
    <script src="https://www.sman1yogya.sch.id/assets/js/main.js"></script>
	
	<script type="text/javascript">
        $(window).on('load',function(){
            $('#infoModal').modal('show');
        });
        
        $('.carousel-pendidik').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            dots: false,
            autoplay: true,
            smartSpeed:500,
            // autoplayTimeout:1000,
            // autoplayHoverPause:true
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>
</body>
</html>