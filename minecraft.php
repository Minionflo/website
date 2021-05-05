<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $_login = "Logged in";
    $_logbutton = '<a href="/logout.php">Logout</a>';
    $_register = '';
} else {
    $_login = "Not Logged in";
    $_logbutton = '<a href="/login.php">Login</a>';
    $_register = '<a href="/register.php">Register</a>';
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
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/minecraft.css">
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/font/font.css">
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/notifications.css"
        <!-- Link --> 
    </head>
    <body>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/social-media.php">Social Media</a></li>
            <li><a class="activ" href="/minecraft.php">Minecraft</a><li>
            <li><?php echo $_register; ?></li>
            <li><?php echo $_logbutton; ?></li>
        </ul>
        <h1 align=center class="title">Minecraft</h1>
        <h1 align=center onclick="copyip()" id="ip-pos"><a id="ip">IP: Minionflo.net</a></h1>
        <h1 align=center id="mc-status-pos"><a id="mc-status">Status: <span data-playercounter-ip="minionflo.net" data-playercounter-status="">Offline</span></a></h1>
        <script src="https://minionflo.net/js/notification.js"></script>
        <script src="https://minionflo.net/js/minecraft-status.js"></script>
        <script src="https://minionflo.net/js/minecraft.js"></script>
    </body>
</html