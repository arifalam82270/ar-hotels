<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arif hotel-facilities</title>
   
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
        <h2 class="fw-font h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis saepe sapiente commodi quaebr
          <br> modi quia,
           nostrum impedit natus architecto cupiditate!
        </p>
      </div>


      <div class="container">
        <div class="row">
          <?php
          $res =selectAll('facilities');
          $path = FEATURES_IMG_PATH;

          while($row = mysqli_fetch_assoc($res)){
            echo<<<data
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                  <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                      <img src=" $path$row[icon]" width="40px">
                      <h5 class="m-0 ms-3">$row[name]</h5>
                    </div>
                    <p> $row[description]</p>
                  </div>
                </div>
            data;
          }
          ?>
          <!-- <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
              <div class="d-flex align-items-center mb-2">
                <img src="images/facilities/wifi.svg" width="40px">
                <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                fuga error vero natus, excepturi sed.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
              <div class="d-flex align-items-center mb-2">
                <img src="images/facilities/wifi.svg" width="40px">
                <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                fuga error vero natus, excepturi sed.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
              <div class="d-flex align-items-center mb-2">
                <img src="images/facilities/wifi.svg" width="40px">
                <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                fuga error vero natus, excepturi sed.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
              <div class="d-flex align-items-center mb-2">
                <img src="images/facilities/wifi.svg" width="40px">
                <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                fuga error vero natus, excepturi sed.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
              <div class="d-flex align-items-center mb-2">
                <img src="images/facilities/wifi.svg" width="40px">
                <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                fuga error vero natus, excepturi sed.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
              <div class="d-flex align-items-center mb-2">
                <img src="images/facilities/wifi.svg" width="40px">
                <h5 class="m-0 ms-3">Wifi</h5>
              </div>
              
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                fuga error vero natus, excepturi sed.</p>
            </div>
          </div> -->
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