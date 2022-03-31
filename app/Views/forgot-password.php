<?php
    require_once("include/header.php"); 
?>
<section id="login-sign-page">
   <div class="container-fluid p-0 h-100">
      <div class="row gx-0 h-100">
         <div class="col-md-6 bg-theme d-flex justify-content-center align-items-center">
            <div class="img-block">
               <!-- <img src="img/login-img.png" alt="" class="img-fluid"> -->
            </div>
         </div>
         <div class="col-md-6 d-grid align-content-center">
            <div class="login-form">
               <img src="img/birddog-login-img.png" alt="" class="img-fluid">
               <form  name="resetPassword" action="">
               <div class="form-heading text-left">
                  <h2>Forgot Password?</h2>
                  <p>No worries, we'll send you reset instructions</p>
               </div>
               <div class="form-group">
               <input type="email" name="email"   placeholder="Email" id="email" class="form-control" required/>
               </div>
               
               <div class="form-group">
                   <button type="login" name="login" value="login" class="btn btn-theme btn-block"> Send </button>
                 </div> 
                 <div class="form-row">
                   <div class="col text-left">
                      <a href="index/register.php" class="register-link link-text">Sign Up</a>
                   </div>
                   <div class="col text-right">
                      <a href="login.php" class="frgtpswrd-link link-text">Back to Login</a>
                   </div>
                 </div>
               </form>
            </div>
         </div>
      </div>
   </div>
 </section>

 <?php
    require_once("include/footer.php") 
 ?>
       