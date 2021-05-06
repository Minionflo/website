<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $_login = "Logged in";
    $_navbar_log = '';
    $_navbar_register = '<a class="navbar-li-a activ" href="/profile.php">Profil</a>';
} else {
    $_login = "Not Logged in";
    $_navbar_log = '<a class="navbar-li-a" href="/login.php">Login</a>';
    $_navbar_register = '<a class="navbar-li-a" href="/register.php">Register</a>';
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $_SESSION = array();
    session_destroy();
    header("location: index.php?logout=true");
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Social Media, HTML, CSS">
        <meta name="author" content="Minionflo">
        <meta name="">
	    <title>Minionflo.net</title>
        <link rel="icon" href="/img/logo/128x128.png"/>
        <link rel="manifest" href="/json/manifest.json">

        <!-- Link -->
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/main.css">
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/profile.css">
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/font/font.css">
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/notifications.css">
        <!-- Link --> 
    </head>
    <body>
    <ul class="navbar">
        <li><a class="navbar-li-a" href="/index.php">Home</a></li>
        <li><a class="navbar-li-a" href="/social-media.php">Social Media</a></li>
        <li><a class="navbar-li-a" href="/programming.php">Programming</a></li>
        <li><a class="navbar-li-a" href="/gaming.php">Gaming</a></li>
        <li><a class="navbar-li-a" href="/minecraft.php">Minecraft</a><li>
        <li><?php echo $_navbar_register; ?></li>
        <li><?php echo $_navbar_log; ?></li>
    </ul>
        <h1 align=center class="title">Profile</h1>
        <div align=center>
        <ul class="ul">
            <li><p align=center class="ul-li" id="username" onclick="copy_username()">Username: <?php echo $_SESSION["username"]; ?></p></li>
            <li><p align=center class="ul-li" id="email" onclick="copy_email()">E-Mail: <?php echo $_SESSION["email"]; ?></p></li>
            <li><p align=center class="ul-li" id="uid" onclick="copy_uid()">UID: <?php echo $_SESSION["id"]; ?></p></li>
            <li><p align=center class="ul-li" id="username" onclick="document.getElementById('logout').submit()">Logout</p></li>
        </ul>
        </div>
        <script src="js/notification.js"></script>
        <script src="js/profile.js"></script>
        <form id="logout" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"></form>
    </body>
</html