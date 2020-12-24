<?php
  include "connection.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron"><h3>SignUp</h3></div>
      <!----------------SignUp------------------------->
      <form method="POST">
        <input type="text" name="fullname" placeholder="Full Name" class="form-control col-md-5" required><br>

        <input type="email" name="email" placeholder="Email" class="form-control col-md-5" required><br>

        <input type="tel" name="mobile" placeholder="Mobile" class="form-control col-md-5" required><br>
        
        <input type="password" name="password" placeholder="Password" class="form-control col-md-5" required><br>

        <input type="password" name="confirmpassword" placeholder="Repeat Password" class="form-control col-md-5" required><br>

        <input type="submit" value="SignUp" name="signupBtn" class="btn btn-success form-control col-md-5"><br>
        
        <?php 
          include "user.php";
        ?>
      </form>
      <!----------------SignUp------------------------->
      <br>
      <a href="login.php">login</a>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>