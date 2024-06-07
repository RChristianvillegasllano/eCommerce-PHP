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

      <div class="image">
         <img src="images/24.jpg" alt="">
      </div>

      <div class="content">
         <p>Welcome to Dear Coffee, where we enjoy making and drinking great coffee. We love coffee and can't wait to share that love with you. We're dedicated to giving you a memorable coffee experience by finding the best beans and making custom mixes. <br>
         Let's go on a journey through the beautiful world of coffee together! </p>

         <p>Follow us now and be part of our growing coffee-loving community! Let's spread the love for coffee far and wide. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Customer Testimonial</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/Testominial-1.jpg" alt="">
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/Testominial-2.jpg" alt="">
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/Testominial-3.jpg" alt="">
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/Testominial-4.jpg" alt="">
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/Testominial-5.jpg" alt="">
         
      </div>

      <div class="swiper-slide slide">
         <img src="images/Testominial-6.jpg" alt="">
         
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

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

</script>

</body>
</html>