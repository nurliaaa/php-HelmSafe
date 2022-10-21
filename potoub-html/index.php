<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Helm Safe</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/img/sports_motorsports.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> -->
   <!-- end loader -->
   <div class="wrapper">
      <!-- end loader -->
      <div class="sidebar">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div id="dismiss">
               <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
               <li class="active"> <a href="#">Home</a> </li>
               <li><a href="#about">About </a> </li>
               <li><a href="#work">Work</a> </li>
               <li><a href="#contact">Contact </a> </li>
            </ul>
         </nav>
      </div>
      <div id="content">
         <!-- header -->
         <header>
            <!-- header inner -->
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/img/Group 12.png" alt="#" style="width:70%;max-width:300px" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                              <div class="text-bg">
                                 <h1>Titipkan<br>Helm Anda</h1>
                                 <p>Tenangkan Hati Anda Dengan Menitipkan Barang Anda </p>
                                 <!-- <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="carousel-icon-box">
                                        <div class="icon"><i class="bi bi-gem"></i></div>
                                        <h4 class="title"><a href="/c_mahasiswa">Mahasiswa</a></h4>
                                    </div>
                                </div> -->
                                 <a class="read_more" href="loker.php">Ambil</a>
                                 <a class="read_more" href="card.php">Simpan</a>
                              </div>
                           </div>
                           <div class="col-xl-20 col-lg-7 col-md-10 col-sm-12">
                              <div class="images_box">
                                 <figure><img src="images/img/Layer.png" width="500" height="600"></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
         </div>
         <!-- end banner -->
         <!-- choose  section -->
         
         <!-- end choose  section -->
         <!-- request -->
         
         <!-- end request -->
         <!--  footer -->
         <footer>
            
               
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
               theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
               $('#sidebar').removeClass('active');
               $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
               $('#sidebar').addClass('active');
               $('.overlay').addClass('active');
               $('.collapse.in').toggleClass('in');
               $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
         });
      </script>
      <script>
         $(document).ready(function() {
            $(".fancybox").fancybox({
               openEffect: "none",
               closeEffect: "none"
            });

            $(".zoom").hover(function() {

               $(this).addClass('transition');
            }, function() {

               $(this).removeClass('transition');
            });
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 11,
               center: {
                  lat: 40.645037,
                  lng: -73.880224
               },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
               position: {
                  lat: 40.645037,
                  lng: -73.880224
               },
               map: map,
               icon: image
            });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
</body>

</html>