<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charest="UTF_8">
    <title>About Us</title>
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
                 <p>Hi! Glad to have you here if you like our little shop you can follow us in other  <a id="medias" href="#ic">medias </a> too!</p>
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
          
            <a class="login"  href="<?php echo get_site_url();?>/signup"> Join us to Grow </a>
            
        </div>
        <!-- ---------------------------------------------------------------------- -->


    <section class="au1 container">
        <div class="left1">
            <h2>It's Really Nice To Meet You Here!</h2>
            <p>We are glad to see you.<br>
            Let's get a little closer! In this page we're gonna talk about Grow.<br> Who are we? Where we came from?</p>
        </div>  
        <div class="right1">
            <img src="<?php echo get_template_directory_uri();?>/img/cute.png">
        </div>
    </section>

     <section class="au2">
        <div class="swiper swiper3">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="introCard yellow">
                    <div><i class="fa-solid fa-arrow-left-long"></i></div>
                    <div class="introTitle">
                        <h2><i>What is Grow?</i></h2>
                    </div>
                    <div class="introText">
                        <p>Grow is a little online shop. We have many different plants to sell , outdoor or indoor!
                             Also , we gave you 10 hints to help you take care of your plants.
                              Don't forget about our delivery , it's free on all orders over £40.
                               You can be sure , everything is safe here , your plants , money and information!
                                
                        </p>
                    </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="introCard green">
                <div><i class="fa-solid fa-arrow-left-long"></i></div>
                    <div class="introTitle">
                        <h2> <i>Who are we?</i></h2>
                    </div>
                    <div class="introText">
                        <p>We are a strong team and Grow is our first shop.
                             So there is nothing to say. Hope this project make a big name so we can write more about us.
                              Thank you for supporting!
                        </p>
                    </div>
                </div>
              </div>


              <div class="swiper-slide">
                <div class="introCard orange">
                    <div class="introTitle">
                        <h2><i>Where are we?</i></h2>
                    </div>
                    <div class="introText">
                        <p>
                            Iran! yes we are in Iran but we can send your plants to wherever you want. 
                             It looks like we are in America but trust me , you will get your little cutie plants!
                              You can also meet us here , in Iran , right in our office. We can drink a tea together! 
                        </p>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </section>

    <section class="au3 container">
        <div class="contact">
            <h3><i>Any Questions?</i></h3>
        </div>
        <div class="contact">
            <div class="tell">
                <p>  <i class="fa-solid fa-phone"></i>        +989123456789</p>
            </div>

            <div class="tell">
                <p>  <i class="fa-regular fa-envelope"></i>        Grow@gmail.com</p>
            </div>
        </div>
    </section>

    <?php get_footer()?>