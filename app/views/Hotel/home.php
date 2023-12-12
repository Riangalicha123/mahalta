<?php include 'include/head.php'?>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="public/images/mahaltalogoo.png" alt="#"/></div>
      </div> -->
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
                              <li class="nav-item active">
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
                              <?php if ($LAVA->is_logged_in()): ?>
                              <li class="nav-item"><a class="nav-link" href="<?= site_url('logout') ?>">Logout</a></li>
                              <?php else: ?>
                              <li class="nav-item"><a class="nav-link" href="<?= site_url('login') ?>">Login</a></li>
                              <?php endif; ?>
                              <li class="nav-item">
                                 <!-- Inside the form tag -->
<form class="form-inline my-2 my-lg-0" onsubmit="searchAndScroll(); return false;">
   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
   <button class="btn btn-outline-info my-2 my-sm-0" type="submit" id="searchButton">
      <i class="fa fa-search"></i>
   </button>
</form>

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
     <!-- login -->
     
      <!-- end our_room -->
      <!-- our_room -->
      <?php include 'include/room.php'?>
      <!-- end our_room -->
      <!-- gallery -->
      <?php include 'include/galery.php'?>
      <!-- end gallery -->
      <!-- blog -->
      <?php include 'include/blog.php'?>
      <!-- end blog -->
      <!--  feedback -->
      <?php include 'include/feedback.php'?>
      <!-- end feedback -->
      <!--  footer -->
      <?php include 'include/footer.php'?>
      <!-- end footer -->
      <!-- Javascript files-->
      <?php include 'include/bottomnav.php'?>
      <script>
    document.querySelector('button').addEventListener('click', function() {
        document.querySelector('.search-input').classList.toggle('visible');
    });
</script>
   </body>
   <script>
   function searchAndScroll() {
      // Get the value from the search input
      var searchTerm = document.getElementById('searchInput').value.toLowerCase();

      // Map search terms to corresponding section IDs
      var sectionMappings = {
         'deluxe': 'deluxe',
         'executive': 'executive',
         'premium': 'premium',
         'family': 'family',
         'boutique': 'boutique',
         'presidential': 'presidential',
         // Add more mappings as needed
      };

      // Check if the search term is in the mappings
      if (sectionMappings.hasOwnProperty(searchTerm)) {
         // Get the corresponding section ID
         var sectionId = sectionMappings[searchTerm];

         // Scroll to the section using smooth scrolling
         document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
      } else {
         // Handle the case when the search term doesn't match any section
         alert('Section not found for the given search term.');
      }
   }
</script>

</html>