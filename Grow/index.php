<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charest="UTF_8">
        <title> Grow</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/all.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/swipercss.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fontawesome.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/brands.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/solid.css">   
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/GrowStyles.css">
    </head>
    
    <body>
        <section class="first">
            <img src="<?php echo get_template_directory_uri();?>/img/Plant.png" class="blue">
            <img src="<?php echo get_template_directory_uri();?>/img/Subtract.png" class="blue1">
            
            <header class="header">
                <i class="fa-solid fa-bars menuBtn"></i>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri();?>/img/1d050b0d-370e-47ec-9a99-4d274459bbde.png" width="80px" height="35px">
                </div>
             
                <ul class="menu"> 
                    <a href="<?php echo get_site_url();?>/signup"><li> Panel</li></a>
                    <a href="<?php echo get_term_link(5)?>"><li>Plant care</li></a> 
                    <li class="gifts"> Gifts</li>
                </ul>
                <div class="icons">
                    <i class="fa-solid fa-magnifying-glass search"></i>
                    <a href="<?php echo get_site_url();?>/AboutUs"><i class="fa-solid fa-seedling"></i></a>
                    <i class="fa-regular fa-heart heart"></i>
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
          
            <a class="login" href="<?php echo get_site_url();?>/signup"> Join us to Grow </a>
            
        </div>
        <!-- ---------------------------------------------------------------------- -->
        <div class="container1">  
            <div class="firstText"> 
                <h1><span class="grow">Grow </span> the tranquility <br>
                of your home</h1>
                <p >Create an Oasis of Calm: Explore Ways to Cultivate and Enhance the<br> Peaceful Ambiance of Your Home</p>
                <a class="shopb" href="#fourth">Shop Now</a>
            </div>
        </div>

        </section> 
        
        <section class="container">
            <div class="text2">
                <h2>Top 10 Grow.</h2>
                <p>Discover our most popular plants </p>
            </div>

            <div class="swiper swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide "> 

                        <div class="items">
                        <img src="<?php echo get_template_directory_uri();?>/img/Image.png">
                        <h4>Hybird Cactus</h4>
                        <p>Lorem ipsum dolor sit amet<br> consectetur<br> adipiscing elit ipsum dolor sit amet.</p>
                        
                        <p>$15.00</p>
                        
                        <div class="rate">
                            <p class="t">(261)</p>
                            <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                      </div>    
                    </div>
                  <div class="swiper-slide "> 

                    <div class="items">
                    <img src="<?php echo get_template_directory_uri();?>/img/Image.png">
                    <h4>Hybird Cactus</h4>
                    <p>Lorem ipsum dolor sit amet<br> consectetur<br> adipiscing elit ipsum dolor sit amet.</p>
                    
                    <p>$15.00</p>
                    
                    <div class="rate">
                        <p class="t">(261)</p>
                        <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                  </div>    
                </div>
                  <div class="swiper-slide "> 
                    <div class="items"> 

                    <img src="<?php echo get_template_directory_uri();?>/img/Image.png">
                    <h4>Hybird Cactus</h4>
                    <p>Lorem ipsum dolor sit amet<br> consectetur<br> adipiscing elit ipsum dolor sit amet.</p>
                    
                    <p>$15.00</p>
                    
                    <div class="rate">
                        <p class="t">(261)</p>
                        <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                </div>
                  <div class="swiper-slide "> 
                    <div class="items"> 

                    <img src="<?php echo get_template_directory_uri();?>/img/Image.png">
                    <h4>Hybird Cactus</h4>
                    <p>Lorem ipsum dolor sit amet<br> consectetur<br> adipiscing elit ipsum dolor sit amet.</p>
                    
                    <p>$15.00</p>
                    
                    <div class="rate">
                        <p class="t">(261)</p>
                        <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div> 
                </div>
                  <div class="swiper-slide "> 
                    <div class="items"> 

                    <img src="<?php echo get_template_directory_uri();?>/img/Image.png">
                    <h4>Hybird Cactus</h4>
                    <p>Lorem ipsum dolor sit amet<br> consectetur<br> adipiscing elit ipsum dolor sit amet.</p>
                    
                    <p>$15.00</p>
                    
                    <div class="rate">
                        <p class="t">(261)</p>
                        <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                </div>
                 
                 </div>
                 <div class="swiper-button-prev"></div>
                 <div class="swiper-button-next"></div>
                 
             </div>
        </section>
        
        <section class="third">
            <div class="container3">
                <img src="<?php echo get_template_directory_uri();?>/img/Vector.png" class="topVector">
                <img src="<?php echo get_template_directory_uri();?>/img/Vector.png" class="bottomVector">
                <div class="leftpicture">
                    <div class="leftPictureText">
                        <h3>Decorate your home</h3>
                    <p>Let Grow reflect your style, creating personalized sanctuaries of
                        <br> elegance.
                    </p>
                    </div>

                    <div class="leftImg">
                        <img src="<?php echo get_template_directory_uri();?>/img/Image (2).png">
                    </div>
                </div>

                <div class="rightPicture">
                    <div class="rightImg">
                        <img src="<?php echo get_template_directory_uri();?>/img/Image (1).png">
                    </div>
                </div>
            </div>
        </section>

        <section id="fourth">
            <div class="shopPlants">     
                <div class="firstPlant">
                      <h2>Indoor  Plants</h2>
                      <p>Bringing Nature Indoors: Explore Our Selection of Lush<br> Indoor Plants</p>
                    <a class="shopPlantsBtn" href="<?php echo get_term_link(3)?>">Shop Indoor Plants</a>
                </div>

                <div class="secPlant">
                    <h2>Outdoor Plants</h2>
                    <p>Explore Nature's Beauty: Shop our Outdoor Plant Collection</p>
                    <a  class="shopPlantsBtn" href="<?php echo get_term_link(4)?>">Shop Outdoor Plants</a>
                </div>

                <div class="thirdPlant">
                    <h2>Plant Care</h2>
                    <p>Nurturing Plants: Your Guide to Thriving Greenery</p>
                    <a class="shopPlantsBtn" href="<?php echo get_term_link(5)?>">Shop Plant Care</a>
                </div>
             </div>
        </section>

        <section class="mt-5">
            <div class="text5">
                <h2>Featured Products</h2>    
                <p>Check out of favourite products of the month.</p> 
            </div>
            <div class="container5"> 
                <div class="swiper swiper2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                         <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages.png">
                            <h4>Snake Plant</h4>
                            <p>From £75.00</p>
                            <h5>2 Litre Pot</h5> 
                          </div> 
                        </div>

                      <div class="swiper-slide">    
                         <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(1).png">
                            <h4>Bonsai</h4>
                            <p>From £45.00</p>
                            <h5>2 Litre Pot</h5> 
                         </div> 
                      </div>

                      <div class="swiper-slide">
                         <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(2).png">
                            <h4>Fairy Castle Cactus</h4>
                            <p>From £30.00</p>
                            <h5>2 Litre Pot</h5> 
                         </div> 
                      </div>
                       <div class="swiper-slide">
                         <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages.png">
                            <h4>Snake Plant</h4>
                            <p>From £75.00</p>
                            <h5>2 Litre Pot</h5> 
                          </div> 
                        </div>

                      <div class="swiper-slide">    
                         <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(1).png">
                            <h4>Bonsai</h4>
                            <p>From £45.00</p>
                            <h5>2 Litre Pot</h5> 
                         </div> 
                      </div>

                      <div class="swiper-slide">
                         <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(2).png">
                            <h4>Fairy Castle Cactus</h4>
                            <p>From £30.00</p>
                            <h5>2 Litre Pot</h5> 
                         </div> 
                      </div>
                      
                    </div>
                </div>

                <div class="swiper swiper2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(3).png">
                            <h4>San Pedro Cactus</h4>
                            <p>From £15.00</p>
                            <h5>2 Litre Pot</h5> 
                        </div> 
                      </div>
                      <div class="swiper-slide">
                          <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(4).png">
                            <h4>Bonsai</h4>
                            <p>From £15.00</p>
                            <h5>2 Litre Pot</h5> 
                          </div> 
                      </div>
                      <div class="swiper-slide"> 
                      <div class="sale">
                        <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(5).png">
                        <h4>Sansevieria cylindrica</h4>
                        <p>From £30.00</p>
                        <h5>2 Litre Pot</h5> 
                      </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(3).png">
                            <h4>San Pedro Cactus</h4>
                            <p>From £15.00</p>
                            <h5>2 Litre Pot</h5> 
                        </div> 
                      </div>
                      <div class="swiper-slide">
                          <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(4).png">
                            <h4>Bonsai</h4>
                            <p>From £15.00</p>
                            <h5>2 Litre Pot</h5> 
                          </div> 
                      </div>
                      <div class="swiper-slide"> 
                      <div class="sale">
                        <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(5).png">
                        <h4>Sansevieria cylindrica</h4>
                        <p>From £30.00</p>
                        <h5>2 Litre Pot</h5> 
                      </div>
                      </div>
                    </div>
                </div>

                <div class="swiper swiper2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(6).png">
                            <h4>Spider Plant</h4>
                            <p>From £25.00</p>
                            <h5>2 Litre Pot</h5> 
                        </div> 
                      </div>
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(7).png">
                            <h4>Chinese Evergreen</h4>
                            <p>From £35.00</p>
                            <h5>3 Litre Pot</h5> 
                          </div> 
                      </div>
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(8).png">
                            <h4>Astophytum Ornatum</h4>
                            <p>From £15.00</p>
                            <h5>2 Litre Pot</h5> 
                          </div> 
                      </div>
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(6).png">
                            <h4>Spider Plant</h4>
                            <p>From £25.00</p>
                            <h5>2 Litre Pot</h5> 
                        </div> 
                      </div>
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(7).png">
                            <h4>Chinese Evergreen</h4>
                            <p>From £35.00</p>
                            <h5>3 Litre Pot</h5> 
                          </div> 
                      </div>
                      <div class="swiper-slide">
                        <div class="sale">
                            <img src="<?php echo get_template_directory_uri();?>/img/PlaceholderImages(8).png">
                            <h4>Astophytum Ornatum</h4>
                            <p>From £15.00</p>
                            <h5>2 Litre Pot</h5> 
                          </div> 
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sixth">
           <div class="container6" >
             <div class="text6 container">
                <h2>Free Delivery</h2>
                <p>On all orders over £40</p>
             </div>
            </div>
        </section>

        <section class="seventh">
            <div class="container container7">
                <div class="text7">
                    <h3>Follow us for much more</h3>
                    <p>Sign up to hear about new products and offers</p>
                </div>

                <div class="forms" >
                    <form class="form" method="post" action="">
                        <div class="sendEmail">
                            <input id="email"type="email" class="email" placeholder="Email" name="email" required>
                            <button type="button" class="sum" id="sum" >Sign up</button>
                        </div>
                    </form>
                    <div> <p id="emailResult"></p></div>
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
                        <a href="<?php echo home_url();?>"><li>Home</li></a>
                        <a href="<?php echo get_site_url();?>/signup"><li> Panel</li></a>
                        <a href="<?php echo get_term_link(5)?>"><li>Plant care</li></a> 
                       </ul> 
                    </div>
                    <hr>
                    <div id="ic" class="ic">
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