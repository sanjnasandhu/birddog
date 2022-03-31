
<section id="login-sign-page">
   <div class="container-fluid p-0 h-100">
      <div class="row gx-0 h-100">
         <div class="col-md-6 bg-theme d-flex justify-content-center align-items-center">
            <div class="img-block">
               <!-- <img src="img/login-img.png" alt="" class="img-fluid"> -->
            </div>
         </div>
         <?php if(isset($validation)):?>
                <div class="alert alert-info">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
         <div class="col-md-6 d-grid align-content-center">
            <div class="login-form py-5">
               <img src="/assets/img/birddog-login-img.png" alt="" class="img-fluid">
               <form action="<?php echo base_url(); ?>/RegisterController/store">
               <div class="form-group">
               <input type="text" name="name" value="<?= set_value('name') ?> "  placeholder="Dealership Name" id="name" class="form-control" required/>
               </div>
               <div class="form-group">
               <input type="email" name="email" value="<?= set_value('email') ?>"  placeholder="email" id="email" class="form-control" required/>
               </div>
               <div class="form-group">
               <input type="password" name="password" value="<?= set_value('password') ?>"   maxlength="12" placeholder="Password" class="form-control" required/>
               </div>
               <div class="form-group">
               <input type="password" name="password" value="<?= set_value('c_password') ?>"   maxlength="12" placeholder="Confirm Password" class="form-control" required/>
               </div>
               <!-- <div class="form-group">
               <input id="f02" type="file" placeholder="Add profile picture"class="form-control" required />
               <label for="f02">Upload Dealership license</label>
               <input type="file" name="file" value="" placeholder="Upload dealership license">
               </div> -->
               <div class="form-group">
                   <button type="login" name="login" value="login" class="btn btn-theme btn-block"> SIGN UP </button>
                 </div> 
                 <div class="form-row">
                   <div class="col text-left">
                      <a href="login" class="register-link link-text">Sign In</a>
                   </div>
                   <div class="col text-right">
                      <a href="forgot-password" class="frgtpswrd-link link-text">Forgot Password?</a>
                   </div>
                 </div>
               </form>
            </div>
         </div>
      </div>
   </div>
 </section>

 
       