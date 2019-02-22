<?php
session_start();
?>

<html>
<head>
	<link rel="stylesheet" href="packages/fontawesome-free-5.7.2-web/css/all.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<link rel="stylesheet" href="signup.css">  
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>

<div class="box">
    <h1>Sign Up</h1><br>
<form method="POST" action="sanitization.php">    
<i class="fa fa-user icon" aria-hidden="true"></i>
<input type="text" placeholder=" Enter your name"name="name" data-toggle="popover" data-content="<?= $_SESSION['error']['name']?>"><br>
<i class="fa fa-phone icon" aria-hidden="true"></i>
<input type="text" placeholder=" Enter your phone number"name="phone"data-toggle="popover" data-content="<?= $_SESSION['error']['phone']?>"><br/>
<i class="fa fa-envelope icon" aria-hidden="true"></i>
<input type="email" placeholder=" Enter your Email"name="email"data-toggle="popover" data-content="<?= $_SESSION['error']['email']?>"><br/>
<i class="fa fa-lock icon" aria-hidden="true"></i>
<input type="password" placeholder="Enter your password"name="password"><br/>
<i class="fa fa-lock icon" aria-hidden="true"></i>
<input type="password" placeholder="Re-enter password"name="repass"data-toggle="popover" data-content="<?= $_SESSION['error']['password']?>">
<button type="submit">Submit</button>
</form>
</div>
  <div class="menu left">
    <p style="color:white;">Or you can Register by</p>
    <a href="https://www.facebook.com"><i class="fab fa-facebook fa-lg"></i>Facebook</a>
   <a href="https://www.google.com"><i class="fab fa-google-plus fa-lg"></i>Google Plus</a>
    <a href="https://www.twitter.com"><i class="fab fa-twitter fa-lg"></i>Twitter</a>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
           $(document).ready(function(){
           	$('[data-toggle="popover"]').popover();
           })	
         </script>
</body>
</html>