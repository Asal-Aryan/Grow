<?php
  if(is_user_logged_in()) {
    get_template_part('Template-parts/dashboard');
  }
  else{ ?>
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charest="UTF_8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/all.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/swipercss.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fontawesome.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/brands.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/solid.css">   
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/signup.css">
    </head>
    <body>
    <a href="<?php echo home_url();?>"><i class="fa-solid fa-arrow-left-long"></i> </a>
    <div class=" main-container">
        <div class="text container">
            <h2> Welcome!</h2>
            <p>Please enter your information to sign up</p>
        </div>
       <div class="container">
            <div class="links">
                <a href="<?php echo get_site_url();?>/login"id="log">Log in</a>
                <a href="<?php echo get_site_url();?>/signup"id="sign">Sign up</a>
            </div>
       </div>

       <div class="container1">
            <div class="container2">
            <form  method="post" action="">
               <div class="mt-3 container">
                <div class="row">
                    <div class="col-6">
                        <input type="text" placeholder="First Name" id="firstname" name="firstname" class="input">
                    </div>
                    <div class="col-6">
                        <input type="text" placeholder="Last Name" id="lastname" name="lastname" class="input">
                    </div>
                </div>
                <input type="email" placeholder="Email" id="signup-email" name="signup-email"class="input">
                <input type="password" placeholder="Password" id="signup-password"name="signup-password" class="input">
              </div>
              <div >
                <p id="signup-result"></p>
                <button type="button" name="signup-sumbit" id="signup-sumbit" >Log in</button>
              </div>
            </form>
            </div>
       </div>
    </div>
            <!-- -------------------------------------JavaScripts---------------------------------- -->
            <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.7.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/swiper.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/Growjs.js"></script>   
    </body>   



 <?php }
?>