<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charest="UTF_8">
        <title>Product</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/all.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/swipercss.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/fontawesome.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/brands.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/solid.css">   
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/signup.css">
    </head>
<body>
    <a href="<?php echo home_url();?>"><i class="fa-solid fa-arrow-left-long arrow"></i> </a>
    <div class="single-container">
    <div class="pro-container">
      <div class="img-cont">
        <img src="<?php echo the_post_thumbnail_url()?>">
      </div>

      <div class="info">
        <div class="m-4">
          <h3 class="inform"><?php echo the_title()?> </h3>
          <div class="mt-sm-5">
            <h4 class="inform">Description: <span><?php echo the_content()?> </span></h4>
            <p class="inform">Price:<span><?php echo get_field("price")?> </span></p>
          </div>
        </div>
        <div class="buy">
          <a> Buy it now</a>
          <i class="fa-solid fa-shopping-cart"></i>
        </div>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/Growjs.js"></script>   
</body>

</html>
