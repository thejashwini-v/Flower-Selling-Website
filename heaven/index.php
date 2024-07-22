<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['email'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}

// User is logged in, show the index page content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Website Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        
        <a href="#" class="logo">Heaven florals
            <span>.</span></a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <!-- <a href="#contact.php">Contact</a> -->
            <a href="login.php" class="button">LOGIN</a>
        </nav>
        <!-- <div class="icons">
            <a href="#" class="fa-solid fa-cart-shopping"></a>
            <a href="#" class="fa-solid fa-user"></a>
        </div> -->
    </header>
<!----header ends-->

<section class="home" id="home">
    <div class="content">
        <h3>Fresh Flowers</h3>
        <span>Natural & colorful flowers</span>
        <h2>Blossom with Elegance</h2>
        <a href="shop.php" class="btn"> Shop Now</a>
    </div>
 </section>
 <!--home section ends-->

 <!--about start-->
 <section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>
    <div class="row">
        <div class="img-container">
            <img src="img/7.jpg" alt="about">
            </div>
        <div class="content">
        <h3>why choose us?</h3>
              <div>
            <p>
                Welcome to Your Flower Shop, where we are passionate about bringing the beauty of nature into your life through our exquisite flower arrangements.
                www.heaven.com is an online flower store that delivers flowers all over the areas of Mangalore we at Happy Blooms deliver the best quality-fresh cut flowers in more than 70+ area across the city with the help of our strong affliate network and channel stores.
                Each and every one of our flowers is hand picked at right stage of bloom.our online flower delivery platform comprises of team with strong technlogical and operation experiences which enables us to delivery us to fresh flowers and gifts at the chepeast prices.we at Happy Bloom know how important it is express our feelings.We defined our success satisfied customers.
            </p>
           <div>
        </div>
  </section>
<!--about section ends-->



<!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>
    <div class="row">
        <center>
        <form action="">
            <input type="text" class="box" placeholder="Name">
            <input type="email" class="box" placeholder="Email">
            <input type="number" class="box" placeholder="Number">
            <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send massage" class="btn">
        </center>
        </form>
        <div class="image">
            <img src="/images/contact-img.svg" alt="">
        </div>
    </div>
</section>
<!--contact section ends-->





<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#about.php">about</a>
            <a href="#products.php">products</a>
            <a href="#review">review</a>
            <!-- <a href="contact.php">contact</a> -->
        </div>
       
        <div class="box">
            <h3>contact info</h3>
            <a href="#">+242-567-14345</a>
            <a href="#">heavenflorals@gmail.com</a>
            <a href="#">Karnataka, Mangaluru - 574142</a>
          <img src="/images/payment.png" alt="">
       
        </div>
        <div class="social-links">
            <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="credit">
        &copy; Created by <span>Heaven florals </span> All Right Reserved.
    </div>
</section>
<!--footer section ends-->


