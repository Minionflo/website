<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $_login = "Logged in";
    $_navbar_log = '';
    $_navbar_register = '<a class="navbar-li-a" href="/profile.php">Profil</a>';
} else {
    $_login = "Not Logged in";
    $_navbar_log = '<a class="navbar-li-a" href="/login.php">Login</a>';
    $_navbar_register = '<a class="navbar-li-a" href="/register.php">Register</a>';
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Social Media, HTML, CSS">
    <meta name="author" content="Minionflo">
    <meta name="robots" content="noindex">
    <title>Gaming - Minionflo.net</title>
    <link rel="icon" href="/img/logo/128x128.png" />
    <link rel="manifest" href="/json/manifest.json">

    <!-- Link -->
    <link rel="stylesheet" type="text/css" href="/css/font/font.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/gaming.css">
    <!-- Link -->
</head>

<body>
<ul class="navbar">
        <li><a class="navbar-li-a" href="/index.php">Home</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Me - </a></li>
        <li><a class="navbar-li-a" href="/social-media.php">Social Media</a></li>
        <li><a class="navbar-li-a" href="/programming.php">Programming</a></li>
        <li><a class="navbar-li-a activ" href="/gaming.php">Gaming</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Server - </a></li>
        <li><a class="navbar-li-a" href="/status.php">Status</a></li>
        <li><a class="navbar-li-a" href="/minecraft.php">Minecraft</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Account - </a></li>
        <li><?php echo $_navbar_register; ?></li>
        <li><?php echo $_navbar_log; ?></li>
    </ul>
    <h1 align=center class="title">Gaming</h1>
    <p class="content" align=center>I mainly play Minecraft. Sometimes I play GTA 5 too</p>
</body>

</html>