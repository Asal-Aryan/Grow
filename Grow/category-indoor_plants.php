<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charest="UTF_8">
    <title>Indoor Plants</title>
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
                 <p>Hi! Glad to have you here if you like our little shop you can follow us in other  <a id="medias" href="#ic">medias </a> too!!</p>
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
    <section>
      <div class="container ofirst">
        <div class="row">
            <div class="col-5 oimg-cont">
                <div class="otext1">
                        <h2>Indoor<br>Plants</h2>
                </div>
            </div>

            <div class="col-7 otext2">
                <div>
                    <h4>Indoor plants, with their green leaves and blooming flowers, help calm people.It is a seemingly hard-wired thing inside a human being's brains that seeing nature in some form in the typical cold, hard environment of an office helps them feel better mentally.<br>
                        Boost moods, productivity, concentration, and creativity<br>
                        Reduce stress and fatigue<br>
                        Be therapeutic to care for</h4>
                </div>
            </div>
        </div>
      </div>
    

    <section class="second mt-5 container">
        <div class="newest">
            <h2>The Newest</h2>
        </div>

        <div class="newPosts">
            <div class="swiper newSwiper">
                <div class="swiper-wrapper">
                    <?php 
                    $args=array(
                        'cat' => 3,
                        'posts_per_page' => 5
                    );
                    $the_query=new WP_Query($args);
                    if($the_query -> have_posts()){
                        while($the_query ->have_posts()){
                            $the_query -> the_post();?>
                    
                    <div class="swiper-slide">

                        <div class="newPost">
                            <div class="postPic">
                                <img src="<?php echo the_post_thumbnail_url();?>">
                            </div>

                            <div class="newPostInfo">
                                <div class="newPostName">
                                    <h4><?php echo the_title(); ?></h4>
                                    <p><?php echo the_content();?></p>
                                </div>

                                <div class="newPostBuy">
                                    <div class="newPostPrice">
                                        <p><?php echo get_field("price");?></p>
                                    </div>
                                    <div class="buy">
                                        <a href="<?php echo the_permalink()?>"><i class="fa-solid fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php   }
                    }?>                   
                </div>
            </div>
        </div>
    </section>

    <section class="third container mt-5 mb-2">
        <div class="all">
            <h2>All The Indoor Plants</h2>
        </div>

        <div class="allPosts">
            <div class="swiper allSwiper">
                <div class="swiper-wrapper wrapper">
                    <?php 
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>
               
                    <div class="swiper-slide">
                        
                    <div class="newPost">
                            <div class="postPic">
                                <img src="<?php echo the_post_thumbnail_url();?>">
                            </div>

                            <div class="newPostInfo">
                                <div class="newPostName">
                                    <h4><?php echo the_title(); ?></h4>
                                    <p><?php echo the_content();?></p>
                                </div>

                                <div class="newPostBuy">
                                    <div class="newPostPrice">
                                        <p><?php echo get_field("price");?></p>
                                    </div>
                                    <div class="buy">
                                        <a href="<?php echo the_permalink() ?>"><i class="fa-solid fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                     </div>
                        
                    </div>
                    <?php    }
                    }?>
                </div>
                <div class="swiper-pagination"></div>
              </div>
        </div>
    </section>

<?php get_footer()?>