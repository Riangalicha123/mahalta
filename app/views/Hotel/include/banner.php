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
                        <div class="container">
                        <form class="room_reservation_form">
                           <div class="row">
                           <div class="col-md-12 mb-3">
                                    <label for="full_name">Full Name</label>
                                    <input class="form-control" type="text" name="full_name" required>
                                 </div>
                                 
                                 
                                 <div class="col-md-6 mb-3">
                                    <label for="contact_number">Contact Number</label>
                                    <input class="form-control" type="tel" name="contact_number" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="address">Address</label>
                                    <input class="form-control" type="text" name="address" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="arrival_date">Check In Date</label>
                                    <input class="form-control" type="date" name="arrival_date" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="departure_date">Check Out Date</label>
                                    <input class="form-control" type="date" name="departure_date" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="capacity">Number of Guests</label>
                                    <input class="form-control" type="number" name="capacity" min="1" required>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label for="room_type">Room Type</label>
                                    <select class="form-control" name="room_type" required>
                                       <option value="option"></option>
                                       <option value="deluxe">Deluxe Room</option>
                                       <option value="executive">Executive Room</option>
                                       <option value="premium">Premium Room</option>
                                       <option value="family">Family Room</option>
                                       <option value="boutique">Boutique Room</option>
                                       <option value="presidential">Presidential Room</option>
                                    </select>
                                 </div>
                                       <div class="col-md-12 text-center">
                                 <button class="btn btn-primary w-100" type="submit">Book Now</button>
                              </div>
                                    </div>
                           </form>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>