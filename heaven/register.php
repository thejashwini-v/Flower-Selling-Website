<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];

    $sql = "INSERT INTO users (username, email, password, gender, phone) VALUES ('$username', '$email', '$password', '$gender', '$phone')";
    if ($conn->query($sql) === TRUE) {
        // Registration successful, redirect to login page after displaying message
        echo "<script>alert('Registration successful!');window.location='login.php'; </script>";
        // header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>


  <style>
     *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
     }
     body{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url(img/6.jpg) no-repeat;
  background-size: cover;
  background-position: center;
     }
      
      .container {
        width: 500px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: #fff;
  border-radius: 12px;
  padding: 30px 40px;
      }
      
      h2 {
        text-align: center;
      }
      
      .container.input-box{
  position: relative;
  width: 100%;
  height: 50px;
  
  margin: 30px 0;
}
.input-box input{
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px;
}
.input-box input::placeholder{
  color: #fff;
}
.input-box i{
  position: absolute;
  right: 20px;
  top: 30%;
  transform: translate(-50%);
  font-size: 20px;

}
      
      label {
        font-weight: bold;
      }
      
      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      
      button {
        width: 100%;
  height: 45px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
      }
      
      button:hover {
        background-color: #0056b3;
      }
      
      #message {
        text-align: center;
        margin-top: 15px;
        color: #007bff;
      }
      
  </style>
</head>
<body>
<div class="container">
    <h2>User Registration</h2>
    <form id="registrationForm" action="register.php" method="POST">
      <div class="input-box">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <br>

      <div class="input-box">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
      </div>
<br>
      <div class="input-box">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
<br>
      <div>
      <label for="gender">Gender:</label>
      <input type="radio" id="radio1" name="gender" value="male" required>Male 
			<input type="radio" id="radio2" name="gender" value="female">Female<br>
    </div>
<br>
        <div class="input-box">
          <label for="password">Phone no:</label> 
<input type="text" name="phone" pattern="[0-9]{10}" required/>
      </div>
      <br>
      <button type="submit">Register</button>
    </form>
    <p id="message"></p>
  </div>
  <!-- <script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
  event.preventDefault();
  var username = document.getElementById("username").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var message = "Registration successful!\n\n";
  message += "Username: " + username + "\n";
  message += "Email: " + email + "\n";
  message += "Password: " + password;
  document.getElementById("message").innerText = message;
});
  </script> -->
</body>
</html>