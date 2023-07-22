<?php
  include'db.php';


  if (isset($_POST['register'])) 
  {
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $psw = $_POST['Psw'];
    $date = $_POST['DOB'];


     $insert = "INSERT INTO `reg_db`(`Username`, `Email`, `Password`, `Date`) VALUES (`$use`,`$email`,`$psw`,` $date`)";

    echo "$username";
     echo "<br>"; 
     echo "$email";
      echo "<br>"; 
      echo "$psw";
        echo "<br>"; 
       echo "$date";
        echo "<br>"; 

  }



  ?>



<!DOCTYPE html>
<html>

<head>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">REG UP</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="reg.php">Home</a></li>
      <li><a href="#">Profile</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<form method="POST" >
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

     <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username"  required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email"  required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Psw"  required>

    <label for="DOB"><b>D.O.B</b></label>
    <input type="date" placeholder="Enter D.O.B" name="DOB">
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="register">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
