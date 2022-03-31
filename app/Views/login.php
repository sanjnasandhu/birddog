
<section id="login-sign-page">
   <div class="container-fluid p-0 h-100">
      <div class="row gx-0 h-100">
         <div class="col-md-6 bg-theme d-flex justify-content-center align-items-center">
            <div class="img-block">
             <!-- <img src="img/login-img.png" alt="" class="img-fluid"> -->
            </div>
         </div>
         <div class="col-md-6 d-grid align-content-center">
            <div class="login-form" method="post">
               <img src="/assets/img/birddog-login-img.png" alt="" class="img-fluid">
               <form action="<?php echo base_url(); ?>/LoginController/signin ">
               <div class="form-group">
               <input type="email" name="email" value="<?= set_value('email') ?>"  placeholder="Username" id="email" class="form-control" required/>
               </div>
               <div class="form-group">
               <input type="password" name="password" value="<?= set_value('password') ?>"   maxlength="12" placeholder="Password" class="form-control" required/>
               </div>
               <div class="form-group">
                   <button type="login" name="login" value="login" class="btn btn-theme btn-block"> LOGIN </button>
                 </div> 
                 <div class="form-row">
                   <div class="col text-left">
                      <a href="user_register.php" class="register-link link-text">Sign Up</a>
                   </div>
                   <div class="col text-right">
                      <a href="forgot-password.php" class="frgtpswrd-link link-text">Forgot Password?</a>
                   </div>
                 </div>
               </form>
            </div>
         </div>
      </div>
   </div>
 </section>

 
       