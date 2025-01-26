<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="content">
         
         <p><h2> Welcome to AgriDairy, your trusted partner in high-quality dairy products.
         At PureDairy, our mission is to deliver the freshest and finest dairy products to your table. We are dedicated to maintaining the highest standards in production, ensuring every product we offer is of exceptional quality.</h2></p>
        <h3> We specialize in producing a wide range of dairy products, including:</h3>
         <section class="category">

<h1 class="heading"></h1>

<div class="swiper category-slider">

<div class="swiper-wrapper">

<a href="" class="swiper-slide slide">
   <img src="images\gheeslider.png" alt="">
   <h3>Ghee</h3>
</a>

<a href="" class="swiper-slide slide">
   <img src="images\curdslider.png" alt="">
   <h3>Curd</h3>
</a>

<a href="" class="swiper-slide slide">
   <img src="images\paneerslider.png" alt="">
   <h3>Paneer</h3>
</a>

<a href="" class="swiper-slide slide">
   <img src="images\cheeseslider.png" alt="">
   <h3>Cheese</h3>
</a>

<a href="" class="swiper-slide slide">
   <img src="images\buttermilkslider2.png" alt="">
   <h3>ButterMilk</h3>
</a>

<a href="" class="swiper-slide slide">
   <img src="images\flavouredmilkslider.png" alt="">
   <h3>Flavoured Milk</h3>
</a>

<a href="" class="swiper-slide slide">
   <img src="images\butterslider.png" alt="">
   <h3>Butter</h3>
</a>

<a href="" class="swiper-slide slide">
   <img src="images\mishtidoislider.png" alt="">
   <h3>MishtiDoi</h3>
</a>

</div>

<div class="swiper-pagination"></div>

</div>

</section>
         
      </div>

   </div>

</section>


   <div class="swiper-pagination"></div>

   </div>

</section>
<h1>Thank you for choosing AgriDairy. We are honored to be a part of your family's meals and committed to bringing you the best from  dairy to your table.</h1>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});
var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

</script>

</body>
</html>