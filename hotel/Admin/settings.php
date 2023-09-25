
<?php
    require('inc/essential.php'); 
    
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel-settings</title>
        <?php require('inc/links.php');?>
    </head>
    <body class="bg-light">
    
      <?php require('inc/header.php');?>

        <div class="container-fluid" id="main-content">
            <div class="row">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                    <h3 class="mb-3">SETTINGS</h3>

                <!-- general setting section -->
                        <div class="card border-0 shadow mb-4" >
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title fw-bold m-0">General Settings</h5>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="bi bi-pencil-square"></i>Edit
                                        </button>
                                </div>
                                 
                                <h6 class="card-subtitle mb-2 fw-bold">Site Title</h6>
                                <p class="card-text" id="site_title"> </p>
                                <h6 class="card-subtitle mb-2 fw-bold">About Us</h6>
                                <p class="card-text" id="site_about"> </p>                              
                            </div>
                        </div>

                        
                 <!--General settings  Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                               <form id="general_s_form">
                                 
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">General Setting</h5>
                                         
                                    </div>
                                    <div class="modal-body">
                                         <div class="mb-3">
                                            <label class="form-label fw-bold">Site Title</label>
                                             <input type="text" name="site_title" required id="site_title_inp" class="form-control shadow-none">
                                         </div>
                                         <div class="mb-3">
                                            <label class="form-label fw-bold">About us</label>
                                            <textarea  name="site_about" id="site_about_inp" required class="form-control shadow-none"  rows="6"></textarea>
                                         </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about " class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn custom-bg text-white shadow-none">Submit</button>
                                    </div>
                                </div>

                               </form>
                            </div>
                        </div>

                  <!-- <--Shutdown settings-->  
                        <div class="card border-0 shadow mb-4" >
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title fw-bold m-0">Shutdown Website</h5>
                                         <div class="form-check form-switch">
                                            <form >
                                            <input  onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
    
                                            </form>
                                          </div>  
                                </div>                                
                                <p class="card-text">No customers will be allowed to book hotels room </p>                              
                            </div>
                        </div>


                 <!-- General setting for contact us section -->
                 <div class="card border-0 shadow mb-4" >
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title fw-bold m-0">Contact Settings</h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact_s">
                                <i class="bi bi-pencil-square"></i>Edit
                                </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-2 fw-bold">Address</h6>
                                <p class="card-text" id="address"> </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-2 fw-bold">Google Map</h6>
                                <p class="card-text" id="gmap"> </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-2 fw-bold">Phone NUmbers</h6>
                                <p class="card-text mb-1"> 
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn1"></span>
                                </p>
                                <p class="card-text"> 
                                    <i class="bi bi-telephone-fill"></i>
                                    <span id="pn2"></span>
                                </p>
                            </div>
                            <div class="mb-4">
                                <h6 class="card-subtitle mb-2 fw-bold">Email</h6>
                                <p class="card-text" id="email"> </p>
                            </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-2 fw-bold">Socials links</h6>
                                    <p class="card-text mb-1"> 
                                        <i class="bi bi-facebook me-1"></i>
                                        <span id="fb"></span>
                                    </p>
                                    <p class="card-text mb-1"> 
                                        <i class="bi bi-instagram me-1"></i>
                                        <span id="insta"></span>
                                    </p>
                                    <p class="card-text"> 
                                        <i class="bi bi-twitter me-1"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 fw-bold">iframe</h6>
                                    <iframe id="iframe" class="border p-2 w-100"  loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                         
                        
                                                 
                    </div>
                </div>
                     
                
                <!-- general contact-us section -->
                <div class="modal fade" id="contact_s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                               <form id="contacts_s_form">
                                 
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">contact Setting</h5>
                                         
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid p-0">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Address</label>
                                                        <input type="text" name="address" required id="address_inp" class="form-control shadow-none">
                                                    </div>
                                                    <div class="mb-3">
                                                         <label class="form-label fw-bold">Google map links</label>
                                                         <input type="text" name="address" required id="gmap_inp" class="form-control shadow-none">
                                                    </div>
                                                    <div class="mb-3">
                                                           <label class="form-label fw-bold">phone numbers(with country code) </label>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"  > <i class="bi bi-telephone-fill"></i></span>
                                                                <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required >
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"  ><i class="bi bi-telephone-fill"></i></span>
                                                                <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none"  >
                                                            </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Email</label>
                                                        <input type="email" name="email" required id="email_inp" class="form-control shadow-none">
                                                    </div>

                                                </div>
                                                  
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                           <label class="form-label fw-bold">Socials links</label>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"  > <i class="bi bi-facebook me-1"></i></span>
                                                                <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"><i class="bi bi-instagram me-1"></i></span>
                                                                <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text"><i class="bi bi-twitter me-1"></i></span>
                                                                <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required >
                                                            </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label fw-bold">Iframe src</label>
                                                        <input type="text" name="iframe" required id="iframe_inp" class="form-control shadow-none">
                                                     </div>

                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="  contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn custom-bg text-white shadow-none">Submit</button>
                                    </div>
                                </div>

                               </form>
                            </div>
                        </div>

                 <!-- team management setting -->
                 <div class="card border-0 shadow mb-4" >

                        <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5 class="card-title fw-bold m-0">Team Management Settings</h5>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#team-s">
                                        <i class="bi bi-plus-square"></i>add
                                        </button>
                                </div>
                                <div class="row" id="team-data">
                                      
                                </div>
                                                       
                        </div>
                    </div>

                          <!-- management modal -->

                <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="team_s_form">
                                 
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"> Add Team Mamber</h5>
                                         
                                    </div>
                                    <div class="modal-body">
                                         <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                             <input type="text" name="member_name" required id="member_name_inp" class="form-control shadow-none">
                                         </div>
                                         <div class="mb-3">
                                            <label class="form-label fw-bold">Picture</label>
                                            <input type="file" name="member_picture" required id="member_picture_inp" accept=".jpg ,.png ,.webp ,.jpeg" class="form-control shadow-none">

                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="member_name.value='' ,member_picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn custom-bg text-white shadow-none">Submit</button>
                                    </div>
                                </div>

                             </form>
                        </div>
                </div>


                 

                 </div>

            </div>
        </div>

    <?php require('inc/scripts.php'); ?>
     <script src="scripts/settings.js"></script>
    </body>
    </html>