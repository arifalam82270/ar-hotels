<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arif hotel-contact</title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@500;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    
    <?php require('include/links.php');?>
    <style>
      .pop:hover{
         border-top-color: var(--teal) !important;
         transform: scale(1.03);
         transition: all 0.3s;

      }
    </style>

    
</head>


<body class="bg-light">

    <?php require('include/header.php');?>


      <div class="my-5 px-4">
        <h2 class="fw-font h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
        
      </div>


        <div class="container">
          <div class="row">

              <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0" >
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                  <div class="container-fluid flex-lg-column align-items-stretch">
                      <h4 class="mt-2">FILTERS  </h4> 
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon shadow-none"></span>
                      </button>
                      <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                          <div class="border bg-light p-3 rounded mb-3">
                              <h5 class="mb-3">CHECK AVAILABILITY</h5>
                              <label class="form-label">Check-In</label>
                              <input type="date" class="form-control shadow-none mb-3">
                              <label class="form-label">Check-Out</label>
                              <input type="date" class="form-control shadow-none mb-3">

                          </div>
                          <div class="border bg-light p-3 rounded mb-3">
                              <h5 class="mb-3" style="font-size: 18px;">FACILITIES </h5>

                              <div class="mb-2">
                              <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3">
                              <label class="form-check-label" for="f1">facility-one</label>
                              </div>

                              <div class="mb-2">
                              <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3">
                              <label class="form-check-label" for="f2">facility-two</label>
                              </div>

                              <div class="mb-2">
                              <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3">
                              <label class="form-check-label" for="f3">facility-three</label>
                              </div>
                              
                          </div>
                          <div class="border bg-light p-3 rounded mb-3">
                              <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                              <div class="d-flex">
                              <div class="me-2">
                                  <label class="form-check-label "  >Adults</label>
                                  <input type="number" class="form-control shadow-none  ">                                                    
                                  </div>
                                  <div>
                                  <label class="form-check-label"  >children</label>
                                  <input type="number" class="form-control shadow-none  ">
                                  </div>
                                  
                              </div>
                                  
                              
                          </div>
                      
                      </div>
                    </div>
                </nav>

              </div>

              <div class="col-lg-9 col-md-12 px-4 ">

                <div class="card mb-4 border-0 shadow w-100" >
                  <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                      <img src="images/rooms/IMG_11892.png" class="img-fluid rounded "  >
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-3">
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

                        <div class="facilities mb-3">
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

                        <div class="guests ">
                          <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill text-dark bg-light  text-wrap">
                          5 Adults
                          </span>
                          <span class="badge rounded-pill text-dark bg-light  text-wrap">
                          4 Children
                          </span>
                    
                        </div>

                    </div>
                    <div class="col-md-2 text-center">
                      <h6 class="mb-4">₹1200 per night</h6>
                      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                      <a href="#" class="btn btn-sm  w-100 btn-outline-dark  shadow-none">More Details</a>


                    </div>
                    
                  </div>
                </div>

                <div class="card mb-4 border-0 shadow w-100" >
                  <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                      <img src="images/rooms/IMG_11892.png" class="img-fluid rounded "  >
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-3">
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

                        <div class="facilities mb-3">
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

                        <div class="guests ">
                          <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill text-dark bg-light  text-wrap">
                          5 Adults
                          </span>
                          <span class="badge rounded-pill text-dark bg-light  text-wrap">
                          4 Children
                          </span>
                    
                        </div>

                    </div>
                    <div class="col-md-2 text-center">
                      <h6 class="mb-4">₹1200 per night</h6>
                      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                      <a href="#" class="btn btn-sm  w-100 btn-outline-dark  shadow-none">More Details</a>


                    </div>
                    
                  </div>
                </div>
                
                <div class="card mb-4 border-0 shadow w-100" >
                  <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                      <img src="images/rooms/IMG_11892.png" class="img-fluid rounded "  >
                    </div>
                    <div class="col-md-5 px-lg-3 px-md-3 px-0">
                    <h5 class="mb-3">Simple Room Name</h5>
                        <div class="features mb-3">
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

                        <div class="facilities mb-3">
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

                        <div class="guests ">
                          <h6 class="mb-1">Guests</h6>
                          <span class="badge rounded-pill text-dark bg-light  text-wrap">
                          5 Adults
                          </span>
                          <span class="badge rounded-pill text-dark bg-light  text-wrap">
                          4 Children
                          </span>
                    
                        </div>

                    </div>
                    <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                      <h6 class="mb-4">₹1200 per night</h6>
                      <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                      <a href="#" class="btn btn-sm  w-100 btn-outline-dark  shadow-none">More Details</a>


                    </div>
                    
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