<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arif hotel-home</title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@500;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    
    <?php require('include/links.php');?>

    <style>
      .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
            }
         
        @media screen and (max-width:575px) {
          .availability-form{
          margin-top: 0px;
          padding: 0 25px;
          
         }
        }

    </style>

</head>




<body class="bg-light">

 <?php require('include/header.php');?>


     <!-- Swiper -->
     <div class="container-fluid px-lg-4 mt-4">
         <div class="swiper swiper-container">
           <div class="swiper-wrapper">

            <div class="swiper-slide">
               <img src="images/carousel/1.png"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
               <img src="images/carousel/2.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
               <img src="images/carousel/3.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
               <img src="images/carousel/4.png"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
               <img src="images/carousel/5.png"  class="w-100 d-block"/>
            </div>
            <div class="swiper-slide">
               <img src="images/carousel/6.png" class="w-100 d-block"/>
            </div>
             
         </div>
        </div>
     </div>

     <!-- check availability form -->
     <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class ="mb-4">Check Booking Availability</h5>
        
          <form >
            <div class="row align-items-end">

              <div class="col-lg-3 mb-3">
                <label class="form-label"   style ="font-weight:500;">Check-in</label>
                <input type="date" class="form-control shadow-none ">
              </div>

              <div class="col-lg-3 mb-3">
                <label class="form-label"   style ="font-weight:500;">Check-Out</label>
                <input type="date" class="form-control shadow-none ">
              </div>

              <div class="col-lg-3 mb-3">
                <label class="form-label"   style ="font-weight:500;">Adult</label>
                    <select class="form-select  shadow-none"  >
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
              </div>
              
              <div class="col-lg-2 mb-3">
                <label class="form-label"   style ="font-weight:500;">Children</label>
                    <select class="form-select  shadow-none"  >
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button type="submit" class=" btn text-white shadow-none custom-bg">Submit </button>
              </div>

            </div>
          </form>
        </div>
      </div>
     </div>

    
    <!-- Our Rooms -->
    <h2 class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top"  >
            <div class="card-body">
              <h >Simple Room Name</h5>
              <h6 class="mb-4">₹ 1400 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">
                  features
                </h6>
                    <span class="badge rounded-pill text-dark bg-light  text-wrap">
                        2 Rooms
                    </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                      1Bathrooms
                    </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                    1 Balcony
                   </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                     3 soffa
                   </span>

              </div>
                  <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill text-dark bg-light  text-wrap">
                        Wi-fi
                      </span>
                      <span class="badge rounded-pill text-dark bg-light  text-wrap">
                      Netflix
                      </span>
                    <span class="badge rounded-pill text-dark bg-light  text-wrap">
                      Ac
                    </span>
                    <span class="badge rounded-pill text-dark bg-light  text-wrap">
                      Room Heater
                </span>

                  </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill text-dark bg-light  text-wrap">
                 5 Adults
                </span>
                <span class="badge rounded-pill text-dark bg-light  text-wrap">
                4 Children
                </span>
          
              </div>

              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class=" badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning" ></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
               

              </div>
               <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>

               </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top"  >
            <div class="card-body">
              <h >Simple Room Name</h5>
              <h6 class="mb-4">₹ 1400 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">
                  features
                </h6>
                    <span class="badge rounded-pill text-dark bg-light  text-wrap">
                        2 Rooms
                    </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                      1Bathrooms
                    </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                    1 Balcony
                   </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                     3 soffa
                   </span>

              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-dark bg-light  text-wrap">
                 Wi-fi
              </span>
              <span class="badge rounded-pill text-dark bg-light  text-wrap">
               Netflix
              </span>
             <span class="badge rounded-pill text-dark bg-light  text-wrap">
               Ac
             </span>
             <span class="badge rounded-pill text-dark bg-light  text-wrap">
              Room Heater
             </span>

              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill text-dark bg-light  text-wrap">
                 5 Adults
              </span>
              <span class="badge rounded-pill text-dark bg-light  text-wrap">
               4 Children
              </span>
          
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class=" badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning" ></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
               

              </div>
               <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>

               </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top"  >
            <div class="card-body">
              <h >Simple Room Name</h5>
              <h6 class="mb-4">₹ 1400 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">
                  features
                </h6>
                    <span class="badge rounded-pill text-dark bg-light  text-wrap">
                        2 Rooms
                    </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                      1Bathrooms
                    </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                    1 Balcony
                   </span>
                   <span class="badge rounded-pill text-dark bg-light  text-wrap">
                     3 soffa
                   </span>

              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill text-dark bg-light  text-wrap">
                      Wi-fi
                    </span>
                    <span class="badge rounded-pill text-dark bg-light  text-wrap">
                    Netflix
                    </span>
                  <span class="badge rounded-pill text-dark bg-light  text-wrap">
                    Ac
                  </span>
                  <span class="badge rounded-pill text-dark bg-light  text-wrap">
                    Room Heater
                  </span>

              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill text-dark bg-light  text-wrap">
                 5 Adults
                  </span>
                  <span class="badge rounded-pill text-dark bg-light  text-wrap">
                  4 Children
                  </span>
          
              </div>
              
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class=" badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning" ></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
               

              </div>
               <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>

               </div>
            </div>
          </div>
        </div>


        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>

        </div>
      </div>
    </div>
    
    <!-- OUR FACILITIES SECTION -->

    <h2 class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>


        </div>
      </div>
    </div>



    <!-- Our Testimonials -->
    <h2 class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimoials</h2>
    <div class="container">
      <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">
          <div class="swiper-slide bg-white p-4">
             <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/about.jpg" width="30px">
              <h6 class="m-0 ms-2">Random user1</h6>
             </div>
             <p>
              this hotels is awesome  if oyur are in kolktat i recommend you to once visit 
              this hotels
             </p>
             <div class="rating">
              <i class="bi bi-star-fill text-warning" ></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
             </div>
          </div>

          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
             <img src="images/about/about.jpg" width="30px">
             <h6 class="m-0 ms-2">Random user1</h6>
            </div>
            <p>
             this hotels is awesome  if oyur are in kolktat i recommend you to once visit 
             this hotels
            </p>
            <div class="rating">
             <i class="bi bi-star-fill text-warning" ></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
            </div>
         </div>

         <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
           <img src="images/about/about.jpg" width="30px">
           <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
           this hotels is awesome  if oyur are in kolktat i recommend you to once visit 
           this hotels
          </p>
          <div class="rating">
           <i class="bi bi-star-fill text-warning" ></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
          </div>
       </div>

       <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
         <img src="images/about/about.jpg" width="30px">
         <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
         this hotels is awesome  if oyur are in kolktat i recommend you to once visit 
         this hotels
        </p>
        <div class="rating">
         <i class="bi bi-star-fill text-warning" ></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
         <i class="bi bi-star-fill text-warning"></i>
        </div>
       </div>
           
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know more>>></a>


    </div>

    <!-- REACH US -->

    <?php 
    $contact_q = "SELECT * FROM `contact_details1` WHERE `sr_no`=?";
    $values =[1];
    $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
     
    ?>
    <h2 class ="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.9684121447144!2d88.4078802!3d22.505368299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0273fb37a70d73%3A0x62d9e21011289075!2s338%2C%20Hussainpur%20Main%20Rd%2C%20Madurdaha%2C%20Hussainpur%2C%20Kolkata%2C%20West%20Bengal%20700107!5e0!3m2!1sen!2sin!4v1691841701083!5m2!1sen!2sin"    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Call Us</h5>
            <a href="tel: +918227074163" class="d-inline-block mb-2 text-decoration-none text-dark"> 
              <i class="bi bi-telephone-fill"></i> +918227074163
             </a>
             <br>
             <a href="email:arifalam82270@gmail.com" class="d-inline-block text-decoration-none text-dark mb-2"> 
              <i class="bi bi-envelope"></i> arifalam82270@gmail.com </a>
            
          </div>

          <div class="bg-white p-4 rounded mb-4">
            <h5>Follow Us</h5>
            <a href="#" class="d-inline-block mb-3 "> 
               <span class=" badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter me-1"></i> Twitter
               </span>
             </a>
             <br>
             <a href="#" class="d-inline-block mb-3 "> 
              <span class=" badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram"></i> instagram
              </span>
            </a>
             <br>
             <a href="#" class="d-inline-block mb-3 "> 
              <span class=" badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook"></i> facebook
              </span>
            </a>
              
          </div>

        </div>
        </div>
      </div>
    </div>
  
    <?php require('include/footer.php');?>

     


 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay:3500,
        disableOnInteraction:false ,
      }
       
    });

    var swiper = new Swiper(".swiper-testimonials", {
      
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView:"auto",
      slidesPerView:3,
      loop: true,
       
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:2,
        },
        1024:{
          slidesPerView: 3,
        },
      }
    });
  </script>
  
</body>
</html>