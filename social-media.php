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
    <meta name="description" content="Minionflo.net">
    <title>Social Media - Minionflo.net</title>
    <link rel="icon" href="/img/logo/128x128.png" />
    <link rel="manifest" href="/json/manifest.json">

    <!-- Link -->
    <link rel="stylesheet" type="text/css" href="/css/font/font.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/social-media.css">
    <!-- Link -->
</head>

<body id="body">
    <ul class="navbar">
        <li><a class="navbar-li-a" href="/index.php">Home</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Me - </a></li>
        <li><a class="navbar-li-a activ" href="/social-media.php">Social Media</a></li>
        <li><a class="navbar-li-a" href="/programming.php">Programming</a></li>
        <li><a class="navbar-li-a" href="/gaming.php">Gaming</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Server - </a></li>
        <li><a class="navbar-li-a" href="/minecraft.php">Minecraft</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Account - </a></li>
        <li><?php echo $_navbar_register; ?></li>
        <li><?php echo $_navbar_log; ?></li>
    </ul>
    <h1 align=center class="title">Social Media</h1>
    <div align=center>
        <ul class="ul">
            <li><a class="ul-li-a" href="http://discord.minionflo.net" target="_blank">Discord</a></li>
            <li><a class="ul-li-a" href="http://youtube.minionflo.net" target="_blank">Youtube</a></li>
            <li><a class="ul-li-a" href="http://reddit.minionflo.net" target="_blank">Reddit</a></li>
            <li><a class="ul-li-a" href="http://spotify.minionflo.net" target="_blank">Spotify</a></li>
            <li><a class="ul-li-a" href="http://twitter.minionflo.net" target="_blank">Twitter</a></li>
            <li><a class="ul-li-a" href="http://instagram.minionflo.net" target="_blank">Instagram</a></li>
            <li><a class="ul-li-a" href="http://twitch.minionflo.net" target="_blank">Twitch</a></li>
            <li><a class="ul-li-a" href="http://tiktok.minionflo.net" target="_blank">Tiktok</a></li>
            <li><a class="ul-li-a" href="http://steam.minionflo.net" target="_blank">Steam</a></li>
            <li><a class="ul-li-a" href="http://github.minionflo.net" target="_blank">Github</a></li>
            <li><a class="ul-li-a" href="http://facebook.minionflo.net" target="_blank">Facebook</a></li>
            <li><a class="ul-li-a" href="http://tellonym.minionflo.net" target="_blank">Tellonym</a></li>
            <li><a class="ul-li-a" href="http://snapchat.minionflo.net" target="_blank">Snapchat</a></li>
            <li><a class="ul-li-a" href="mailto:public@minionflo.net" target="_blank">E-Mail</a></li>
        </ul>
    </div>
</body>

</html