
<?php include 'include/head.php'?>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="public/images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="public/images/mahaltalogo.jpg" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="/">Home</a>
                              </li>
                             
                              <li class="nav-item">
                                 <a class="nav-link" href="/room">Room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/gallery">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/blog">Blog</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="/feedback">Feedback</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/login">Login</a>
                              </li>
                              <li class="nav-item">
                              <button type="submit" class="nav-link"><i class="fa fa-search"></i></button>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
   
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="public/images/1.jpg" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <!--<div class="carousel-item">
                  <img class="second-slide" src="public/images/2.jpg" alt="Second slide">
               </div>-->
               <div class="carousel-item">
                  <img class="third-slide" src="public/images/3.jpg" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         
         
      </section>
      <!-- end banner -->

      <!--  feedback -->
      <?php include 'include/feedback.php'?>
      <!-- end feedback -->
      <!--  footer -->
      <?php include 'include/footer.php'?>
      <!-- end footer -->
      <!-- Javascript files-->
      <?php include 'include/bottomnav.php'?>
   </body>
</html>