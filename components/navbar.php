<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/components/css/navbar.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/components/js/main.js"></script>
</head>
<body>
    <header>
        <div class="hamburger">
        </div>
        <div class="logo">
            <a href="/">THE TIMELINE.org</a>
        </div>
        <div class="rightMenu">
            <div class="search">
                <form action="/search.php">
                    <input type="search" name="query" id="search-query" placeholder="Type..">
                    <input type="submit" id="submit" value="Search">
                </form>
            </div>
            <div class="profile">
                <p>Welcome|</p><a>Guest</a>
            </div>
        </div>
    </header>
    <div class="profile-menu hidden">
        <div class="avatar"></div>
        <ul class="context-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Themes</a></li>
            <li><a href="/admin/index.php">Dashboard</a></li>
        </ul>
        <div class="login-modals">
            <?php 
                if (isset($_SESSION['user'])) {
                    echo '<a id="logout" href="/login/logout.php">Logout</a>';
                }
                else{
                    echo '<a id="login" href="/login/index.php">Login</a>';
                }
            ?>
        </div>
    </div>
    <nav class="navbar">
        <div class="close-btn">X</div>
        <ul class="navmenu">
            <li class="menu-list"><a href="/">Home</a></li>
            <li class="menu-list"><a href="/V15zx76UMvJSR/top.php">Top</a></li>
            <li class="menu-list"><a href="/V15zx76UMvJSR/todaysSpl.php">Today's Special</a></li>
            <li class="menu-list"><a href="/V15zx76UMvJSR/about.php">About Us</a></li>
        </ul>
        <ul class="social-links">
            <li id="fb"><a href="#"></a></li>
            <li id="twitter"><a href="#"></a></li>
            <li id="linkdin"><a href="#"></a></li>
        </ul>
    </nav>
</body>
</html>