<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Register</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/login.css">
  <script src="/js/jquery.min.js"></script>
  <script src="js/main.js"></script>
</head>

<?php
$showAlert = false;
include "../components/navbar.php";
if (isset($_SESSION['loggedin'])) {
  if (isset($_SERVER["HTTP_REFERER"])) {
    $httpReferer = $_SERVER['HTTP_REFERER'];
    echo '<script>window.location.href="' . $httpReferer . '";</script>';
  } else {
    // echo "<script>alert('Invalid Request. Redirecting..')</script>";
    echo '<script>window.location.href="/";</script>';
  }

  exit;
}
?>
<body>
    <div class="form-container">
        <div class="banner"></div>
        <div class="main">
            <h2>Register Yourself / Sign Up</h2>
            <form name="form" id="form">
                <input type="text" name="fname" id="fname" placeholder="First Name" class="inpbox" required>
                <input type="text" name="lname" id="lname" placeholder="Last Name" class="inpbox" required>
                <input type="email" name="email" id="email" placeholder="Email" class="inpbox" required>
                <input type="hidden" name="userid" value="" id="userid" class="inpbox">
                <input type="password" name="password" id="password" minlength="8" maxlength="15" placeholder="Password"
                  class="inpbox">
                <input type="password" name="confpassword" id="confpassword" minlength="8" maxlength="15"
                  placeholder="Conform Password" class="inpbox">
                <input type="submit" value="Sign Up" id="signup" />
                <div class="showAlert"></div>
                <p class="referer">I Already have an <a href="/login/index.php">Account</a></p>
            </form>
        </div>
    </div>
</body>

</html>