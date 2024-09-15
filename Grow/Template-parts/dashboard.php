<?php
  $user_id=get_current_user_id();
  $userData=get_userdata($user_id);
  $displayName= $userData -> display_name;
  $name= explode(" " , $displayName);
  $firstname=$name[0];
  $lastname=$name[1];
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charest="UTF_8">
    <title>Panel</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/swipercss.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/brands.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/solid.css">   
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/indoor.css">
</head>
<body>
    <header class="container">
        <div class="row">
            <div class="col-2 logo">
                <i class="fa-solid fa-bars menuBtn"></i>
                <img src="<?php echo get_template_directory_uri();?>/img/1d050b0d-370e-47ec-9a99-4d274459bbde.png" width="80px" height="35px">
            </div>
            <div class="col-5">
                <ul class="menu1"> 
                    <a href="<?php echo get_site_url();?>/signup"><li> Panel</li></a>
                    <a href="<?php echo get_term_link(5)?>"><li>Plant care</li></a> 
                    <li class="gifts"> Gifts</li>
                </ul>
            </div>
            <div class="col-5">
                <div class="icons">
                    <i class="fa-solid fa-magnifying-glass search"></i>
                    <a href="<?php echo get_site_url();?>/AboutUs"><i class="fa-solid fa-seedling"></i></a>
                    <i class="fa-regular fa-heart heart"></i>
                </div>
            </div>
        </div>
    </header>
        <div class="popup container">

                <div class="popupBox">
                 <p>Hi! Glad to have you here if you like our little shop you can follow us in other   <a id="medias" href="#ic">medias </a> too!</p>
                </div>
            </div>

            <div class="giftPopup container">
               <div class="giftPopupBox">
                 <p>Gifts will be available very soon!</p>
               </div>
            </div> 
                <!-- ------------------------------search part---------------------------------- -->
                <div class="search-part">
                <div class="search-cont">
                    <input type="text" name="search" id="search" placeholder="Search...">
                    <button id="searchBtn" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div id="result-box">
                    <div class="result-part">
                        <h4 id="search-result"></h4>
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                </div>
            </div>
            
            <!-- ----------------------------mobile menu----------------------------------- -->
            <div class="mobileMenu">
            <button class="menuClose">
                <i class="fa-solid fa-close"></i>
            </button>
            <img src="<?php echo get_template_directory_uri();?>/img/1d050b0d-370e-47ec-9a99-4d274459bbde.png">
            <nav>
               <?php echo wp_nav_menu(array('theme_location' => 'category_menu'));?>
            </nav>
          
            <a class="login" href="<?php echo get_site_url();?>/signup"> Join us to Grow </a>
            
        </div>
        <!-- ---------------------------------------------------------------------- -->
        <section class="dfirst mt-5 mb-3">
      <div class="container">
         <div class="container dash1">
            <div class="dtext1">
               <h2>Welcome To Your Own Panel!</h2>
            </div>
            <div class="inform mt-5">
               <div class="imgHolder">
                 <div>
                   <img id="mainPFP" src="<?php echo get_template_directory_uri();?>/img/pic3.png">
                 </div>
               </div>
               <div class="information">
                 <div class="row">
                    <div class="col-6"><h4>First Name : <span><?php echo ($firstname) ?></span></h4></div>
                    <div class="col-6"> <h4>Last Name : <span><?php echo ($lastname) ?></span></h4></div>
                 </div>
                 <div class="text-center">
                    <h4 >Email : <span><?php echo $userData -> user_login?></span></h4>
                    <div class="logout">  <a href="<?php echo wp_logout_url() ?>"> Log out</a></div>
                 </div>
               </div>
            </div>
           </div>
         </div>
   </section>
  

        <footer class="footer">
         <div class="container container8">
                <div class="g">
                   <img src="<?php echo get_template_directory_uri();?>/img/l.png">
                   <p>Grow.</p>
                </div>

                <div class="icon">
                    <div class="home">
                       <ul class="fi">
                        <a href="<?php echo get_site_url();?>/index"><li>Home</li></a>
                        <a href="<?php echo get_site_url();?>/signup"><li> Panel</li></a>
                        <a href="<?php echo get_term_link(5)?>"><li>Plant care</li></a> 
                        <li>Gifts</li>
                       </ul> 
                    </div>
                    <hr>
                    <div class="ic">
                        <img src="<?php echo get_template_directory_uri();?>/img/iconoir_facebook.png">
                        <img src="<?php echo get_template_directory_uri();?>/img/Instagram.png">
                        <img src="<?php echo get_template_directory_uri();?>/img/Twitter.png">
                        <img src="<?php echo get_template_directory_uri();?>/img/mingcute_youtube-line.png">
                    </div>
                </div>
         </div>
        </footer>

        <!-- -------------------------------------JavaScripts---------------------------------- -->
        <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.7.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/swiper.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/Growjs.js"></script>   
   
 
      </body>