
 <?php
    require('inc/essential.php'); 
    require('inc/db_config.php');
    //adminLogin();
     
   
  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Feature & Facilities</title>
        <?php require('inc/links.php');?>
    </head>
<body class="bg-light">
    
      <?php require('inc/header.php');?>

        <div class="container-fluid" id="main-content">
            <div class="row">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                    <h3 class="mb-3">Feature & Facilities</h3>
  
                    <div class="card border-0 shadow mb-4" >
                        <div class="card-body">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="card-title fw-bold m-0">features Settings</h5>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feature-s">
                                        <i class="bi bi-plus-square"></i>add
                                        </button>
                            </div>

                            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                        <thead >
                                            <tr class="bg-dark text-light">
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>                                  
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="features-data">                                       
                                        </tbody>
                                </table>
                            </div>
                                                          
                        </div>
                    </div>
 
                    
                    <div class="card border-0 shadow mb-4" >
                        <div class="card-body">

                            <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h5 class="card-title fw-bold m-0">fecilities </h5>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#facility-s">
                                        <i class="bi bi-plus-square"></i>add
                                        </button>
                            </div>

                            <div class="table-responsive-md" style="height: 350px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                        <thead  >
                                            <tr class="bg-dark text-light">
                                            <th scope="col">#</th>
                                            <th scope="col">Icon</th>   
                                            <th scope="col">Name</th>                                  
                                            <th scope="col" width="40%">Description</th>                                                                 
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="facilities-data">                                       
                                        </tbody>
                                </table>
                            </div>
                                                          
                        </div>
                    </div>
 

            </div>
        </div>
    </div>


    <!-- feature modal -->

    <div class="modal fade" id="feature-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="feature_s_form">
                                 
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"> Add features</h5>
                                         
                                    </div>
                                    <div class="modal-body">
                                         <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                             <input type="text" name="feature_name" required  class="form-control shadow-none">
                                         </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset"   class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn custom-bg text-white shadow-none">Submit</button>
                                    </div>
                                </div>

                             </form>
                        </div>
    </div>

   <!-- facility modal -->
        <div class="modal fade" id="facility-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form id="facility_s_form">
                                 
                               <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"> Add Facility</h5>
                                         
                                    </div>
                                    <div class="modal-body">
                                         <div class="mb-3">
                                            <label class="form-label fw-bold">Name</label>
                                             <input type="text" name="facility_name" required   class="form-control shadow-none">
                                         </div>
                                         <div class="mb-3">
                                            <label class="form-label fw-bold">Icon</label>
                                            <input type="file" name="facility_icon" required  accept=".svg" class="form-control shadow-none">
                                          </div>
                                          <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="facility_desc"  class="form-control shadow-none" rows="3"></textarea>
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="reset"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit"  class="btn custom-bg text-white shadow-none">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
        </div>


    <?php require('inc/scripts.php'); ?>


  <script src="scripts/features_facilities.js"></script>

</body>
    </html>