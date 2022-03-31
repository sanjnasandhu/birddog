<!-- <?php

///require_once("include/header.php") ?>
 
<?php

//require_once("include/sidebar.php") ?> -->
<!-- <body id="page-top"> -->

    <!-- Page Wrapper -->
   
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php

echo view('templates/navbar'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid bg-white">
                  <div class="main-content-area">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="panel-heading">Complete Your Dealership Profile</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row grey-border p-3">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-sx-12">
                            <div class="left-content-wrap">
                                <h2 class="wrap-heading mb-2">Fill in the details</h3>
                                <form action="" method="post" enctype="multipart/form-data" class="grey-input">
	                                <div class="form-row">
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Dealership Name" required="">
                                      </div> 
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="" placeholder="Location" required="">
                                      </div> 
                                  </div> 
                                  <div class="form-row">
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="" placeholder="Sales Representative Name" required="">
                                      </div> 
                                      <div class="col form-group">
                                        <input type="text" class="form-control" name="" placeholder=" BirdDog Rate" required="">
                                      </div> 
                                  </div>
                                  <div class="form-group">
                                    <textarea class="form-control" name=""  placeholder="Description" ></textarea>
                                  </div> 

                                  <div class="form-row">
                                      <div class="col-md-3 form-group">
                                        <a href="#" class="add-image">
                                          <div class="cover-img-box">
                                            <img src="/assets/img/add-new.png" alt="">
                                            <h3>Add Image</h3>
                                          </div>
                                        </a>
                                      </div> 
                                      <div class="col-md-3 form-group">
                                      <label for="myfile">Add Cover Image</label>
                                      <input type="file" id="myfile" name="myfile"><br><br>
                                      </div> 
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" name="reg_submit"  class="btn btn-theme"> Publish  </button>
                                  </div> 
                                </form>
                                <div class="mb-4"></div>
                               
                             
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-sx-12">
                            <div class="right-content-wrap">
                            <h2 class="wrap-heading mb-0">Timings</h3>
                            <table class="table bg-grey-table table-responsive">
                                  <thead>
                                    <tr>
                                      <!-- <th scope="col">#</th>
                                      <th scope="col">First</th>
                                      <th scope="col">Last</th>
                                      <th scope="col">Handle</th> -->
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Mon</td>
                                      <td>8:00am   -   5:00pm</td>
                                     </tr>
                                    <tr>
                                      <td>Tue</td>
                                      <td>8:00am   -   5:00pm</td>
                                    </tr>
                                    <tr>
                                      <td>Wed</td>
                                      <td>8:00am   -   5:00pm</td>
                                    </tr>
                                    <tr>
                                      <td>Thurs</td>
                                      <td>8:00am   -   5:00pm</td>
                                    </tr>
                                    <tr>
                                      <td>Fri</td>
                                      <td>8:00am   -   5:00pm</td>
                                    </tr>
                                    <tr>
                                      <td>Sat</td>
                                      <td>8:00am   -   5:00pm</td>
                                    </tr>
                                    <tr>
                                      <td>Sun</td>
                                      <td>
                                        <select class="day-availability">
                                          <option>Open</option>
                                          <option>Close</option>
                                        </select>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <div class="mb-4"></div>
                           
                        </div>    
                    </div>

                  </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

    <?php

//require_once("include/footer.php") ?>