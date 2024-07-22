<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>festival flower</title>
 
  <link rel="stylesheet" href="styles.css">


<style>
  body {
    background-image: url('dd.jpg');
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }


  nav {
   
    list-style-type: flex; /* Remove default bullets */
    margin: 1; /* Remove default margin */
    padding: 0; /* Remove default padding */
    text-align: center; /* Center align the links */
    color:red;
  }
 
  h1 {
    text-align:center;
  }


  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }


  nav ul li {
    display: inline; /* Display horizontally */
  }


  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
  }


  nav ul li a {
    display: block;
    padding: 20px;
    color: #b20b0b;
    text-decoration: none;
  }


  nav ul li a:hover {
    background-color: #555;
  }
  .boxcontainer {
    display: flex; /* Use flexbox for layout */
    display: flex; /* Use flexbox for layout */
    justify-content: center; /* Center align items horizontally */
    align-items: center; /* Center align items vertically */
    margin-top: 20px;
     }
 
  .boxcontainer1 {
    display: flex; /* Use flexbox for layout */
    justify-content: center; /* Center align items horizontally */
    align-items: center; /* Center align items vertically */
    margin-top: 20px;
     }
 
  /* Style for the boxes */
  .box {
    position: relative;
    width: 350px;
    height: 350px;
    align-items: center;
    background-color: #ccc;
   
    margin-left: 20px; /* Margin between boxes */
  }
 
  /* Style for the image */
  .box img {
    width: 200%;
    height: 100%;
    object-fit: cover; /* Maintain aspect ratio */
  }
  .box {
    border-width: 2px;
    border-style: solid;
    border-color: #000;
}


 
</style>
</head>


<body>
 
 <h1>festival flower</h1>


  <div class="boxcontainer">
   
    <div class="box"><img src=""></div>
    <div class="box"><img src="image2.jpg" alt="Image 2"></div>
    <div class="box"><img src="image3.jpg" alt="Image 3"></div>
   
  </div>
  <div class="boxcontainer1">
    <div class="box"><img src=""></div>
    <div class="box"><img src="image2.jpg" alt="Image 2"></div>
    <div class="box"><img src="image3.jpg" alt="Image 3"></div>
   
   
  </div>
 
</body>
</html>
