<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" />
    <title>Log In</title>
    <meta name="description" content="Login To Timestamp.org" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/login.css">
    <script src="/js/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<?php
include("../components/navbar.php");
$showAlert = false;
// if Already logged in this script will Executed..
if (isset($_SESSION['loggedin'])) {
    if (isset($_SERVER["HTTP_REFERER"])) {
        $httpReferer = $_SERVER['HTTP_REFERER'];
        // echo '<div style="margin:200px 40%" class="showAlert blue">Already Loggedin. Redirecting..</div>';
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
            <h2>Login To Our Website</h2>
            <form name="form" id="form">
                <input type="text" id="email" name="email" class="inpbox" placeholder="User Name" required>
                <input type="password" id="password" name="password" class="inpbox" placeholder="Password" required>
                <input type="submit" value="LOG IN" id="login" />
                <div class="showAlert"></div>
                <p class="referer">New User! click to <a href="register.php">Sign Up</a></p>
            </form>
        </div>
    </div>
</body>
</html>











