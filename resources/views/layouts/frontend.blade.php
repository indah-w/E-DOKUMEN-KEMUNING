
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/frontend')}}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="#">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Site Title -->
    <title>Kampung Hijau Kemuning</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/linearicons.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/nice-select.css">							
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.css">			
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery-ui.css">			
        <link rel="stylesheet" href="{{asset('/frontend')}}/css/main.css">
    </head>
    <body>	
      <header id="header" id="home">
          <div class="header-top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                          <ul>
                            <li><a href="{{url('https://web.facebook.com/?_rdc=1&_rdr')}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{url('https://twitter.com/?lang=en')}}"><i class="fa fa-twitter"></i></a></li>
                          </ul>			
                      </div>
                      <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                          <a href="#"><span class="lnr lnr-phone-handset"></span> <span class="text">+6287788079029</span></a>
                          <a href="{{url('https://accounts.google.com/login')}}"><span class="lnr lnr-envelope"></span> <span class="text">kampunghijaukemuning@gmail.com</span></a>			
                      </div>
                  </div>			  					
              </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="/beranda"><img src="{{asset('/frontend')}}/img/logo1.png" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="/beranda">Beranda</a></li>
                  <li><a href="{{url('sites/tentang')}}">Tentang</a></li>
                  <li><a href="{{url('sites/event')}}">Events</a></li>
                  <li><a href="{{url('sites/kegiatan')}}">Kegiatan</a></li>
                  <li><a href="{{url('sites/artikel')}}">Artikel</a></li>
                  <li><a href="{{url('sites/informasi')}}">Informasi</a></li>					          					          		          
                  <li><a href="{{url('sites/kontak')}}">Kontak</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>	
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-between">
                    <div class="banner-content col-lg-9 col-md-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('/frontend')}}/img/kata1.png" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('/frontend')}}/img/kata2.png" alt="Second slide">
                              </div>
                            </div>  
                          </div>
                          <br/>
                        <br/>
                        <div style= "text-align: center">
                            <a href="{{ route('login') }}" class="primary-btn text-uppercase ">Login</a>
                        </div>
                    </div>										
                </div>
            </div>					
        </section>
        <!-- End banner Area -->

        <!-- Start feature Area -->
        
        <!-- End feature Area -->
                
        <!-- Start popular-course Area -->
        <section class="popular-course-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Kegiatan Populer</h1>
                            <p>Momen yang menginspirasi di dalam kehidupan</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="active-popular-carusel">
                        @foreach($kegiatan as $data)
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>	
                                    <img class="img-fluid" src="{{asset('/img/'.$data->foto)}}" alt="">
                                </div>									
                            </div>
                            <div class="details">
                                <a href="#">
                                    <h4>
                                        {{$data->nama_kegiatan}}
                                    </h4>
                                </a>
                            </div>
                        </div>	
                        @endforeach
                        </div>							
                    </div>
                </div>
            </div>	
        </section>
        <!-- End popular-course Area -->
        

        <!-- Start search-course Area -->
        <section class="search-course-area relative">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6 search-course-left">
                        <h1 class="text-white">
                            Mari Kurangilah Sampah! <br>
                        </h1>
                        <p>
                            Mencintai dan melindungi alam sudah menjadi kewajiban kita sebagai manusia. Bumi diserahkan kepada manusia untuk dilindungi, bukan dirusaki. Dengan membuang sampah pada tempatnya sudah cukup membantu bumi agar tetap asri.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 search-course-right section-gap">
                        <form class="form-wrap" action="#">
                            
                        </form>
                    </div>
                </div>
            </div>	
        </section>
        <!-- End search-course Area -->
        
    
        <!-- Start upcoming-event Area -->
        <section class="upcoming-event-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Events Yang Akan Hadir</h1>
                            <p></p>
                        </div>
                    </div>
                </div>								
                <div class="row">
                    <div class="active-upcoming-event-carusel">
                        @foreach($event as $data) 
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <img class="img-fluid" src="{{ asset('/img/'.$data->foto)}}" alt="">
                                <!-- <p>{{ $data->tanggal_event }}</p> -->
                                <a href="#"><h4>{{ $data->nama_event }}</h4></a>
                            </div>
                            <!-- <div class="detials col-12 col-md-6">
                                
                            </div> -->
                        </div>
                        @endforeach																					
                    </div>
                </div>
            </div>	
        </section>
        <!-- End upcoming-event Area -->
                    
        <!-- Start review Area -->
        
        <!-- End review Area -->	
        
        <!-- Start cta-one Area -->
        <section class="cta-one-area relative section-gap">
            <div class="container">
                <div class="overlay overlay-bg"></div>
                <div class="row justify-content-center">
                    <div class="wrap">
                        <h1 class="text-white">Ayo Hijaukan Lingkungan Sejukkan Pandangan!</h1>
                        <div style= "text-align: center">
                        <br/>
                            Dengan menanam pohon untuk lingkungan sekitar kita dapat selamatkan bumi demi generasi yang akan datang.
                        </div>						
                    </div>					
                </div>
            </div>	
        </section>
        <!-- End cta-one Area -->

        <!-- Start blog Area -->
        
        <!-- End blog Area -->			
        

        <!-- Start cta-two Area -->
        
        <!-- End cta-two Area -->

        <!-- bagian judul halaman blog -->
        <h3> @yield('judul_halaman')</h3>

        <!-- bagian konten blog -->
        @yield('konten')
                    
        <!-- start footer Area -->		
        <footer class="footer-area section-footer">
            <div class="container">
                <div class="row">
                    											
                </div>
                <div class="footer-bottom row align-items-center justify-content-between">
                    <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kampung Hijau Kemuning | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by indahwdyst
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-6 col-sm-12 footer-social">
                        <a href="{{url('https://web.facebook.com/?_rdc=1&_rdr')}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{url('https://twitter.com/?lang=en')}}"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>						
            </div>
        </footer>	
        <!-- End footer Area -->	


        <script src="{{asset('/frontend')}}/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('/frontend')}}/js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="{{asset('/frontend')}}/js/easing.min.js"></script>			
        <script src="{{asset('/frontend')}}/js/hoverIntent.js"></script>
        <script src="{{asset('/frontend')}}/js/superfish.min.js"></script>	
        <script src="{{asset('/frontend')}}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>	
        <script src="{{asset('/frontend')}}/js/jquery.tabs.min.js"></script>						
        <script src="{{asset('/frontend')}}/js/jquery.nice-select.min.js"></script>	
        <script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>									
        <script src="{{asset('/frontend')}}/js/mail-script.js"></script>	
        <script src="{{asset('/frontend')}}/js/main.js"></script>	
    </body>
</html>
