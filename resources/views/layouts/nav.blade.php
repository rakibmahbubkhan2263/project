<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="application-name" content="">
      <meta name="description" content="">
      <title>Dashboard</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">
      <!-- Normalize -->
      <link rel="stylesheet" type="text/css" href="css/vendor/normalize.css">
      <!-- Ico Font -->
      <link rel="stylesheet" type="text/css" href="css/vendor/icofont/css/icofont.css">
      <!-- Style Css -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <!-- Responsive Css -->
      <link rel="stylesheet" type="text/css" href="responsive.css">
   </head>
   <body>
      <!-- Header Start -->
      <header>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-7 order-sm-1 order-2 primary-menu-tm">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                     <a class="navbar-brand" href="{{ url('dashboard' )}}"><strong>E-WORK</strong></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Hire Freelancer<span class="sr-only">(current)</span></a>
                              <ul class="dropdown-menu">
                                 <li class="nav-item dropdown">
                                    <a class="dropdown-item" href="{{ url('post_project') }}">Post a Project</a>
                                 </li>
                                 <li><a class="dropdown-item" href="{{ url('freelancers') }}">Find Freelancer</a></li>
                              </ul>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="job-search.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Find Work</a>
                              <ul class="dropdown-menu">
                                 <li class="nav-item dropdown"><a class="dropdown-item" href="{{ url('browse-jobs') }}">Browse Projects</a></li>
                              </ul>
                           </li>

                        </ul>

                        <form class="form-inline my-2 my-lg-0"> 
                           <input class="form-control mr-sm-2 bg-gray-700 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" type="search" placeholder="&#xed60; Find Freelancer">
                        </form>
                     </div>
                  </nav>
               </div>
               <div class="col-sm-12 col-md-6 col-lg-5 order-sm-2 order-1 header-notification">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light">
                     <ul class="navbar-nav ml-auto ymp-right-menu">

                        <li class="nav-item menu-button">
                           <a class="nav-link" href="{{ url('post_project') }}">Post A Project</a>
                        </li>

                        <li class="menu-bar dropdown dropdown-user">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <img src="img/avater.jpg" width="35" height="35" alt="">
                           <span style="color: white;">Hi Rakib</span>
                           </a>
                           <ul class="dropdown-menu">
                              <li class="nav-item dropdown"><a class="dropdown-item" href="{{ url('edit_profile') }}">My Profile</a></li>
                              <li><a class="dropdown-item" href="{{ url('workstream') }}">Workstream</a></li>
                              <li><a class="dropdown-item" href="{{ url('payment') }}">Payment</a></li>
                              <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header End -->

      @yield('content')
      @yield('footer')


            <!-- Footer Start -->
            <footer id="footer" class="margin-top">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <h4 class="widget-title">About Us</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <h4 class="widget-title">Quick Links</h4>
                     <ul>
                        <li><a href="#">Success stories</a></li>
                        <li><a href="#">Take the first Step</a></li>
                        <li><a href="#">Get started in minutes</a></li>
                        <li><a href="#">Featured on</a></li>
                        <li><a href="#">Top 5 freelancers</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <h4 class="widget-title">Support</h4>
                     <ul>
                        <li><a href="#">Live chat</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support HQ</a></li>
                        <li><a href="#">Trust & Safety</a></li>
                        <li><a href="#">Submit a Ticket</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3">
                     <h4 class="widget-title">Get In Touch</h4>
                     <div class="contact">
                        <ul>
                           <li>
                              <i class="icofont icofont-iphone"></i>
                              <a href="tel:+8801791504103">+880 1791 504103</a>
                           </li>
                           <li>
                              <i class="icofont icofont-send-mail"></i>
                              <a href="mailto:rmk@gmail.com">rmk@gmail.com</a>
                           </li>
                        </ul>
                     </div>
                     <div class="footer-inline">
                        <ul class="social-icons">
                           <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-skype"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-youtube-play"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-tumblr"></i></a></li>
                           <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                        </ul>
                        <ul class="applicategoriesion-store">
                           <li><a href="#"><img src="img/store/app-store.png" alt=""></a></li>
                           <li><a href="#"><img src="img/store/play-store.png" alt=""></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </footer>
      <!-- End -->
      <script src="js/vendor/font-awesome.js"></script>
      <script src="js/vendor/tether.min.js"></script>
      <script src="js/vendor/popper.min.js"></script>
      <script src="js/vendor/jquery-3.3.1.slim.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script> 
      <script src="js/vendor/chart.min.js"></script>
      <script src="js/chart.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>