<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Smart : Wisata Indonesia</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="Foto/logo.jpeg"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
      <a href="login.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="Foto/Bromo.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Gunung Bromo</h3>
            <p>Nikmati liburan dengan kesenangan tak terlupakan dengan paket terlaris Gunung Bromo kami!</p>
            <h2>IDR 100,000 </h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Danau toba.jpeg" alt="">
         </div>
         <div class="content">
         <h3>Danau Toba</h3>
            <p>Nikmati liburan dengan kesenangan tak terlupakan dengan paket terlaris Danau Toba kami!</p>
            <h2>IDR 900,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Bali.jpeg" alt="">
         </div>
         <div class="content">
         <h3>Bali</h3>
            <p>Nikmati liburan dengan kesenangan tak terlupakan dengan paket terlaris  di Bali kami!</p>
            <h2>IDR 1,500,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Mulawarman Museum.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Museum Mulawarman</h3>
            <p>Nikmati liburan dengan kesenagan tak terlupakan dengan paket terlaris di Museum Mulawarman kami</p>
            <h2>IDR 50,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Paket Tour Derawan, Labuan Cermin (Via Berau) 4 Hari 3 Malam - Tour Kalimantan Timur.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Pantai Derawan</h3>
            <p>Nikmati liburan dengan kesenagan tak terlupakan dengan paket terlaris di Pantai Derawan kami</p>
            <h2>IDR 100,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Pulau Kumala.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Pulau Kumala</h3>
            <p>Nikmati liburan dengan kesenagan tak terlupakan dengan paket terlaris di Pulau Kumala kami</p>
            <h2>IDR 10,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Raja Ampat.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Raja Ampat</h3>
            <p>Nikmati liburan dengan kesenagan tak terlupakan dengan paket terlaris di Raja Ampat kami</p>
            <h2>IDR 700,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Taman Nasional Komodo.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Pulau Komodo</h3>
            <p>Nikmati liburan dengan kesenagan tak terlupakan dengan paket terlaris di Pulau Komodo kami</p>
            <h2>IDR 500,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="Foto/Toraja.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Toraja</h3>
            <p>Nikmati liburan dengan kesenagan tak terlupakan dengan paket terlaris di Toraja kami</p>
            <h2>IDR 140,000</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +880-1517-089144 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> sagorcse38@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> dhaka, Bangladesh - 1215  </a>
      </div>
   </div>
   <div class="credit"> designed by <span>kelompok 1</span></div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>