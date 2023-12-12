
<?php include 'include/head.php'?>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="public/images/mahaltalogoo.png" alt="#"/></div>
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
                             
                              <li class="nav-item active">
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
      <?php include 'include/banner.php'?>
      <!-- end banner -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12" >
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Experience luxury and comfort in our meticulously designed hotel rooms, offering a perfect blend of modern amenities and elegant decor for a relaxing stay. </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6" id="deluxe">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="public/images/room1.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Deluxe Room</h3>
                        <p>Indulge in the opulence of our Deluxe Rooms, featuring contemporary furnishings and breathtaking views, providing a perfect retreat for a memorable stay.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6" id="executive">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="public/images/room2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Executive Room</h3>
                        <p>Experience unparalleled comfort in our Executive Suites, where spacious living areas, personalized services, and sophisticated design converge to create a lavish ambiance.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6" id="premium">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="public/images/room3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Premium Room</h3>
                        <p>For those seeking an extra touch of luxury, our Premium Suites offer a haven of tranquility, boasting exclusive amenities and a refined atmosphere for a truly indulgent escape.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6" id="family">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="public/images/room4.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Family Room</h3>
                        <p>Discover the charm of our Family Rooms, thoughtfully designed to accommodate the whole family, with ample space, vibrant decor, and a range of family-friendly amenities. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6" id="boutique">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="public/images/room5.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Boutique Room</h3>
                        <p>Unwind in style in our Boutique Rooms, uniquely crafted to provide a chic and intimate setting, combining modern design elements with personalized service for a distinctive stay. </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6" id="presidential">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="public/images/room6.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Presidential Room</h3>
                        <p>Embrace the ultimate in elegance with our Presidential Suite, a lavish retreat featuring sumptuous furnishings, and exclusive privileges, ensuring an unparalleled experience in luxury living. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end our_room -->
      <!--  footer -->
      <?php include 'include/footer.php'?>
      <!-- end footer -->
      <!-- Javascript files-->
      <?php include 'include/bottomnav.php'?>
     <!-- Add this script at the end of your HTML file -->

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