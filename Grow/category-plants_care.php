<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charest="UTF_8">
    <title>Plants Care</title>
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
          
            <a class="login" href="<?php echo get_site_url();?>/signup"> Join us to Grow </a>
            
        </div>
        <!-- ---------------------------------------------------------------------- -->

    <section class="container pc1">
        <div class="pcText1">
            <h2>Plants Care</h2>
            <p>Some hints to <span class="pcG">Grow </span>your plants<i class="fa-solid fa-seedling"></i></p>
        </div>
    </section>

    <section class="container pc2">
        <div class="ten">
            <h3>Here we have 10 advices for you<br>hope it helps</h3>
        </div>
        <div class="container advices">
            <div class="advice">
               <div class="topic">
                <div class="ih4">
                    <i class="fa-regular fa-sun"></i>
                    <h4>  Choose plants based on your light</h4>
                </div>
                <div class="angle1">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph1">
                  <p>Generally speaking, south-facing windows give bright light, east & west-facing windows give moderate light, and north-facing windows give low light. If there's something outside your window for example, a large tree or building that could obstruct sunlight, make sure to take that into consideration, too. Most houseplants prefer bright, indirect sunlight, but many can tolerate lower light levels</p>
               </div>
            </div>

            <div class="advice">
               <div class="topic">
                <div class="ih4">
                    <i class="fa-regular fa-calendar"></i>
                    <h4>  Pick plants that work with your schedule</h4>
                </div>
                <div class="angle2">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph2">
                <p> A busy work schedule, social life, and general forgetfulness can lead to unintentional plant neglect. It's okay. Some plants can handle that kind of lifestyle. A jet-setter like yourself will enjoy the resilience of low-maintenance and drought-tolerant succulents, ZZ plants, or snake plants, all pretty low key, as long as they have enough light (bright and low light respectively). These should keep looking their best when you return from your next trip.
                If you've got more time, you can try a few attention-loving air plants, orchids, or ferns. Like a mist for the face, an extra spritz of filtered water daily between waterings keeps humidity levels nice and balanced for these delicate plants.</p>
               </div>
            </div>

            <div class="advice">
               <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-bottle-water"></i>
                    <h4>  Be mindful when watering</h4>   
                </div>
                <div class="angle3">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph3">
                <p>It's better to under water your plants than to overwater. Too much water can lead to root rot. Ditch your watering schedule and water your plant only when it needs it. Check the potting mix or soil first to make sure it's dry at least 2 inches deep below the surface. If your soil looks dark in color, feels moist, and sticks to your finger, your plant has enough water to do it's thing for now.
                    How often you water will also change throughout the year. Plants need less water in the winter months, when they're growing slower, the days are shorter and sunlight is less intense. If the heat is on and their soil is drying out quicker, they may need a bit more water. Wilting leaves or soil that looks pulled away from the sides of the planter are signs of a thirsty plant.
                    Always use warm water because it absorbs best. Pour water directly on the soil around the base of the plant, because plants absorb water from their roots. The only exception here is Epiphytes, like air plants, who absorb water through their leaves.
                    You can also place a saucer under your planter, if it has a drainage hole. After you water, let your plant soak up in access water that fills the saucer for a few hours before emptying it.</p>
               </div>
            </div>

            <div class="advice">
             <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-droplet"></i>
                    <h4>  Raise humidity levels when needed</h4>
                </div>
                <div class="angle4">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph4">
                   <p>Staying true to your plant's natural environment will help your plant thrive indoors. Most tropical plants prefer high humidity and bright to moderate, indirect light. During the dry months of winter, grouping similar plants together helps to create a more humid microclimate. A humidifier can help too and it's great for humans (find more ways to increase humidity levels here). On the other hand, most desert dwellers like cacti and succulents prefer dry air and bright, direct light with no shade at all. They don't much care for humidity.</p>
               </div>
            </div>

            <div class="advice">
             <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-temperature-quarter"></i>
                    <h4>  Always keep temperatures stable</h4>
                </div>
                <div class="angle5">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph5">
                  <p>Keep your plant's home environment as stable as possible. Extreme changes can stress plants out. Keep the temperature between 65 and 85 degrees F, and avoid placing your plants near radiators, A/C units, and forced-air vents, which can create hot or cold drafts.</p>
               </div>
            </div>

            <div class="advice">
              <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-bucket"></i>
                    <h4>  Know when to skip the fertilizer</h4>
                </div>
                <div class="angle6">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph6">
                <p>Be mindful when using fertilizer on your houseplants. Too much fertilizer can do more harm than good. Houseplants tend to not need fertilizer as often as outdoor plants do. If you do choose to fertilize your plant, it's best to do so during the growing season (early spring to early fall) and follow the general rule of thumb: 'less is more'. Most store-bought fertilizers should be diluted with water before use.</p>
               </div>
            </div>

            <div class="advice">
              <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-store"></i>
                    <h4>  Shop from a reliable source</h4>
                </div>
                <div class="angle7">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph7">
                <p>Purchase your plants from a reputable source like us, your favorite local garden center, and specialty stores or florists. Purchasing from a source with plant experts on-site means they can answer all your questions. Most people who sell or work with plants love talking about them. We definitely do.</p>
               </div>
            </div>

            <div class="advice">
               <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-truck"></i>
                    <h4>  Show a little TLC at first</h4>
                </div>
                <div class="angle8">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph8">
                <p>Once your plant has been delivered to your door or brought home from your local store, it will need a few weeks to adjust to its new environment. Show your plant a little extra attention in the beginning. Observing your plant will tell you when to water and when to not, if the temperature is too high or too low, and if it's getting enough sun. Plus they're so pleasing to look at.</p>
               </div>
            </div>

            <div class="advice">
              <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-seedling"></i>
                    <h4>  Don't be scared to repot</h4>
                </div>
                <div class="angle9">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph9">
                <p>A common misconception,"repotting" does not necessarily mean putting your plant in a new planter, but rather, changing out your plant's soil with fresh potting mix to provide new nutrients. Plants typically need to be repotted every 12 to 18 months, depending on how actively they are growing. If your plant has outgrown its current planter, you can also use this as a time to size up. Choose a planter only 1 to 3 inches larger than its current container. The idea is that your plant is not swimming in soil, which may lead you to overwater, but has a little extra space to grow.</p>
               </div>
            </div>

             <div class="advice">
              <div class="topic">
                <div class="ih4">
                    <i class="fa-solid fa-brain"></i> 
                    <h4>  Keep drainage in mind</h4>
                </div>
                <div class="angle10">
                    <i class="fa-solid fa-angle-down"></i>
                </div>
               </div>
               <div class="paragraph10">
                <p>If you tend to have a heavy hand when watering your plants, keep drainage in mind. You can opt for a planter with a drainage hole and saucer, keep your plant in a grow pot nestled inside a planter, or add lava rocks to the bottom of a planter without a hole (to create crevices for excess water to flow to). Do what works best for you! Don't be afraid to try different methods for different plants.</p>
               </div>
            </div>
        </div>
    </section>
<?php get_footer()?>