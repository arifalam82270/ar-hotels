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
        <h2 class="fw-font h-font text-center">Contact US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis saepe sapiente commodi quaebr
          <br> modi quia,
           nostrum impedit natus architecto cupiditate!
        </p>
      </div>


      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4   pop">

            <iframe class="w-100 rounded mb-4" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.9684121447144!2d88.4078802!3d22.505368299999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0273fb37a70d73%3A0x62d9e21011289075!2s338%2C%20Hussainpur%20Main%20Rd%2C%20Madurdaha%2C%20Hussainpur%2C%20Kolkata%2C%20West%20Bengal%20700107!5e0!3m2!1sen!2sin!4v1691841701083!5m2!1sen!2sin"    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5>Address</h5>
                <a href="https://goo.gl/maps/NpmYf1kv8aq64HHt6" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">

                <i class="bi bi-geo-alt-fill"></i>
                  338, Hussainpur Main Rd, Madurdaha,
                 Hussainpur, Kolkata, West Bengal 700107
                </a>
                <h5 class="mt-4">Call Us</h5>

              <a href="tel: +918227074163" class="d-inline-block mb-2 text-decoration-none text-dark">  
              <i class="bi bi-telephone-fill"></i> +918227074163
             </a>

             <br>

             <h5 class="mt-4">Email</h5>
             <a href="mailto:arifalam82270@gmail.com" class="d-inline-block text-decoration-none text-dark mb-2"> 
              <i class="bi bi-envelope"></i> arifalam82270@gmail.com
             </a>

              <h5 class="mt-4"> Follow Us</h5>
              <a href="#" class="d-inline-block text-dark fs-5 me-2">
                 <i class="bi bi-facebook me-1"></i>
               </a>
               <a href="#" class="d-inline-block text-dark fs-5 me-2">
                 <i class="bi bi-twitter me-1"></i>
               </a>
               <a href="#" class="d-inline-block text-dark fs-5 me-2">
                 <i class="bi bi-instagram me-1"></i>
               </a>

            </div>
          </div>

          <div class="col-lg-6 col-md-6  px-4">
            <div class="bg-white rounded shadow p-4  pop">
                <form method="POST">
                    <div class="mt-3">
                    <label  class="form-label" style="font-weight:500">Name</label>
                    <input name="name" required type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                    <label  class="form-label" style="font-weight:500">Email</label>
                    <input name="email" required type="email" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                    <label  class="form-label" style="font-weight:500">Subject</label>
                    <input name="subject" required type="text" class="form-control shadow-none">
                    </div>
                    <div class="mt-3">
                    <label  class="form-label" style="font-weight:500">Message</label>
                    <textarea name="message" required class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                    </div>
                    <button type="submit" name="send" class="btn text-white custom-bg mt-3 shadow-none">SEND</button>
                </form>
            </div>
          </div>
          
        </div>
      </div>

      <?php
      if(isset($_POST['send']))
      {
        $frm_data =filteration($_POST);

        $q ="INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values =[$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

        $res = insert($q,$values,'ssss');
        if($res==1){
          alert('success', 'Mail sent!');
        }
        else
        {
          alert('error','Server down try again later.');
        }
      }
      ?>


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