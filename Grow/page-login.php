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
        <title>Log In</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/all.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/swipercss.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fontawesome.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/brands.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/solid.css">   
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/login.css">
    </head>

    <body>
    <a href="<?php echo home_url();?>"><i class="fa-solid fa-arrow-left-long"></i> </a>
    <div class=" main-container">
        <div class="text container">
            <h2> Welcome Back!</h2>
            <p>Please enter your email and password to log in</p>
        </div>
       <div class="container">
            <div class="links">
                <a href="<?php echo get_site_url();?>/login" id="log">Log in</a>
                <a href="<?php echo get_site_url();?>/signup"id="sign">Sign up</a>
            </div>
       </div>

       <div class="container1">
            <div class="container2">
            <form  method="post" action="">
               <div class="mt-3 container">
                <input type="email" placeholder="Email" id="login-email" class="input">
                <input type="password" placeholder="Password" id="login-password" class="input">
              </div>
              <div >
                <p id="login-result"></p>
                <button type="button" id="login-sumbit" >Log in</button>
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