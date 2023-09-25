<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arif hotel-about</title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@500;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    
    <?php require('include/links.php');?>
    <style>
      .box:hover{
          border-top-color:var(--teal) !important;
          transform: scale(1.02);
          transition: all 0.3s ;

      }
    </style>

    
</head>


<body class="bg-light">

    <?php require('include/header.php');?>


    <div class="my-5 px-4">
        <h2 class="fw-font h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis saepe sapiente commodi quaebr
          <br> modi quia,
           nostrum impedit natus architecto cupiditate!
        </p>
      </div>


       <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Lorem, ipsum dolor.</h3>
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing
                     elit. Ipsa ea vel deleniti. Esse, dicta natus!
                    </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
       </div>


       <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">1K CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">800+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">100+ STAFF</h4>
                </div>
            </div>
        </div>
       </div>


       <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

       <div class="container px-4">
        <div class="swiper mySwiper  ">
            <div class="swiper-wrapper mb-5 ">
                <?php 
                $about_r = selectAll('team_details') ;
                $path =ABOUT_IMG_PATH;
                while($row = mysqli_fetch_assoc($about_r)){
                    echo<<<data
                        <div class="swiper-slide bg-white text-center overflow-hidden-rounded">
                            <img src="$path$row[picture]" class="w-100">
                            <h5 class="mt-2">$row[name] </h5>
                        </div>
                    data;
                }
                ?>
                    <!-- <div class="swiper-slide bg-white text-center overflow-hidden-rounded">
                        <img src="images/about/IMG_16569.jpeg" class="w-100">
                        <h5 class="mt-2">
                            Arif Alam
                        </h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden-rounded">
                            <img src="images/about/IMG_16569.jpeg" class="w-100">
                            <h5 class="mt-2">
                                Arif Alam
                            </h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden-rounded">
                            <img src="images/about/IMG_16569.jpeg" class="w-100">
                            <h5 class="mt-2">
                                Arif Alam
                            </h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden-rounded">
                                <img src="images/about/IMG_16569.jpeg" class="w-100">
                                <h5 class="mt-2">
                                    Arif Alam
                                </h5>
                    </div>
                    <div class="swiper-slide bg-white text-center overflow-hidden-rounded">
                            <img src="images/about/IMG_16569.jpeg" class="w-100">
                            <h5 class="mt-2">
                                Arif Alam
                            </h5>
                    </div> -->
                </div>
            <div class="swiper-pagination"></div>
          </div>
       </div>

            <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView:3,
                spaceBetween:40,
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

    <?php require('include/footer.php');?>

     


    
    
    </body>
    </html>