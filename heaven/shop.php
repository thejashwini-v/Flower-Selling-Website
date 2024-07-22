<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['email'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Website Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="shop.css"> 
</head>
<body>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        
        <a href="#" class="logo">Heaven florals
            <span>.</span></a>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="index.php">About</a>
            <!-- <a href="#contact.php">Contact</a> -->
            <a href="login.php" class="button">LOGIN</a>
        </nav>
        <div class="icons">
            <a href="#" class="fa-solid fa-cart-shopping"></a>
            <a href="#" class="fa-solid fa-user"></a>
        </div>
    </header>
    <section class="products" id="products">
        <h1 class="heading"> Bigin<span>Your Day</span></h1>
        <div class="row"></div>
    </section>
    <section>
        <div class="service-container" id="service-page">
            <div class="service">
                <h3>Fesival Flowers</h3>
                <img src="img/fest.jpg" alt="Service 1">
                <div class="service-info">
<p>They paint contrasting colors along the ground and bring joy to many. Their elegance and delicate touches have us all in awe and exhilaration.</p>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Bouquets</h3>
                <img src="img/Blink.jpg" alt="Service 2">
                <div class="service-info">
                    <p>Gardens and flowers have a way of bringing people together, drawing them from their homes.”</p>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
            <div class="service">
                <h3>Roses</h3>
                <img src="img/2.jpg" alt="Service 3">
                <div class="service-info">
                    <p>The queen of flowers, rose is very beautiful and attractive. It grows in different colours like red, white, yellow, pink and other varieties. Small thorns on the stem protect the plant. In the world of art</p>
                   
                </div><a href="book.php"><button class="book-button">Book Now</button></a>
            </div>
            <div class="service">
                <h3>Decors</h3>
                <img src="img/decor.jpg" alt="Service 4">
                <div class="service-info">
                    <p> Design is a plan for arranging elements in such a way as best to accomplish a particular purpose." </p>
                    <a href="book.php"><button class="book-button">Book Now</button></a>
                </div>
            </div>
        </div>
</section>
</body>
</html>