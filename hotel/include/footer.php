
        <div class="container-fluid bg-white mt-5" >
            <div class="row">

                <div class="col-lg-4 p-4">
                <h3 class= " h-font fw-bold fs-3 mb-3"> AR HOTELS</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Eum incidunt ipsum pariatur debitis culpa 
                    facere dolorum perspiciatis tempora enim, libero modi velit. 
                    Ipsam nesciunt earum minus sed suscipit, ratione nemo!
                </p>
                </div>
                <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="index.php" class="d-lg-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="room.php" class="d-lg-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
                <a href="facilities.php" class="d-lg-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
                <a href="contact.php" class="d-lg-inline-block mb-2 text-dark text-decoration-none">About</a> <br>
                <a href="about.php" class="d-lg-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>

                </div>
                <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="d-lg-inline-block text-dark text-decoration-none mb-4">
                    <i class="bi bi-twitter me-1"></i> Twitter
                </a><br>
                <a href="#" class="d-lg-inline-block text-dark text-decoration-none mb-4">
                    <i class="bi bi-facebook me-1"></i> facebook
                </a><br>
                <a href="#" class="d-lg-inline-block text-dark text-decoration-none ">
                    <i class="bi bi-instagram me-1"></i> instagram
                </a><br>
                </div>
            </div>
            </div>

            <h6 class="text-center bg-dark text-white p-3 m-0">design and devlop by arif @copyright 2023</h6>
        

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function setActive()
    {
        let navbar = document.getElementById('nav-bar');
        let a_tag = navbar.getElementsByTagName('a');

        for(i =0; i<a_tag.length;i++){
            let file =a_tag[i].href.split('/').pop();
            let file_name =file.split('.')[0];

            if(document.location.href.indexOf(file_name) >= 0){
                a_tag[i].classList.add('active');
            }
        }
    }


    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit',(e)=>{

        e.preventDefault();
        let data = new FormData();

        data.append('name',register_form.elements['name'].value);
        data.append('email',register_form.elements['email'].value);
        data.append('phonenum',register_form.elements['phonenum'].value);
        data.append('address',register_form.elements['address'].value);
        data.append('pincode',register_form.elements['pincode'].value);
        data.append('dob',register_form.elements['dob'].value);
        data.append('pass',register_form.elements['pass'].value);
        data.append('cpass',register_form.elements['cpass'].value);
        data.append('profile',register_form.elements['profile'].files[0]);
        data.append('register','');

        var myModal = document.getElementById('registerModel');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr =new XMLHttpRequest();
        xhr.open("POST","ajax/login_register.php",true);

        xhr.onload =function(){

            
        }

        xhr.send(data);



    })
    setActive();
</script>