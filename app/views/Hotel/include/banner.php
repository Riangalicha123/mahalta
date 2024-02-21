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
         
         <div class="booking_ocline">
            <div class="container">
               
               <div class="row">
                  <div class="col-md-5">
                     
                     <div class="book_room">
                        <h1>Book a Room Online</h1>
                        <!-- <form class="book_now">
                           <div class="row">
                              <div class="col-md-12">
                                 <span>Arrival</span>
                                 <img class="date_cua" src="public/images/date.png">
                                 <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                              </div>
                              <div class="col-md-12">
                                 <span>Departure</span>
                                 <img class="date_cua" src="public/images/date.png">
                                 <input class="online_book" placeholder="dd/mm/yyyy" type="date" name="dd/mm/yyyy">
                              </div>
                              <div class="col-md-12">
                                 <button class="book_btn">Book Now</button>
                              </div>
                              <div class="col-md-12">
                                    <form class="example">
                                        <input type="text" placeholder="Search..." name="search" class="search-input">
                                        <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                           </div>
                        </form> -->
                        <form class="room_reservation_form" action="<?=site_url('insertroom');?>" method="POST">
                           <div class="row " >
                           <div class="col-md-6">
                                    <label for="full_name">Full Name</label>
                                    <input class="online_book" type="text" name="FullName" required>
                              </div>
                              
                              <div class="col-md-6">
                                    <label for="full_name">Contact</label>
                                    <input class="online_book" type="text" name="ContactNumber" required>
                              </div>
                              
                              <div class="col-md-6">
                                    <label for="full_name">Address</label>
                                    <input class="online_book" type="text" name="Address" required>
                              </div>
                              <div class="col-md-6">
                                    <label for="contact_number">Room Type</label>
                                    <input class="online_book" type="text" name="RoomType" required>
                              </div>
                              <div class="col-md-6">
                                    <label for="full_name">Check In</label>
                                    <input class="online_book"  type="text" name="CheckinDate" placeholder="Year-Month-Day 00:00:00" required>
                              </div>
                              <div class="col-md-6">
                                    <label for="full_name">Check Out</label>
                                    <input class="online_book" class="form-control datetimepicker"
                                    type="text" name="CheckoutDate" placeholder="Year-Month-Day 00:00:00" required>
                              </div>
                              
                              <div class="col-md-6">
                                    <label for="capacity">Number of Guest</label>
                                    <input class="online_book" type="number" name="NumberofGuest" min="1" required>
                              </div>
                              <div class="col-md-6">
                                    <label for="capacity">Amount</label>
                                    <input class="online_book" type="number" name="TotalAmount" min="1" required>
                              </div>
                            <!--   <div class="col-md-12">
                                    <button class="book_btn" type="submit">Book Now</button>
                              </div> -->
                             
                           </div>
                           <button class="book_btn" type="submit">Book Now</button>
                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      