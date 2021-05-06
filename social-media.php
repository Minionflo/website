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
	    <title>Minionflo.net</title>
        <link rel="icon" href="/img/logo/128x128.png"/>
        <link rel="manifest" href="/json/manifest.json">
		
        <!-- Link -->
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/main.css">
        <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/social-media.css">
	    <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/font/font.css">
        <!-- Link --> 
    </head>
    <body id="body">
	<ul class="navbar">
        <li><a class="navbar-li-a" href="/index.php">Home</a></li>
        <li><a class="navbar-li-a activ" href="/social-media.php">Social Media</a></li>
        <li><a class="navbar-li-a" href="/programming.php">Programming</a></li>
        <li><a class="navbar-li-a" href="/gaming.php">Gaming</a></li>
        <li><a class="navbar-li-a" href="/minecraft.php">Minecraft</a><li>
        <li><?php echo $_navbar_register; ?></li>
        <li><?php echo $_navbar_log; ?></li>
    </ul>
		<h1 align=center class="title">Social Media</h1>
		<p align=center id="discord-pos"><a id="discord" href="http://discord.minionflo.net" target="_blank">Discord</a></p>
		<p align=center id="youtube-pos"><a id="youtube" href="http://youtube.minionflo.net" target="_blank">Youtube</a></p>
		<p align=center id="reddit-pos"><a id="reddit" href="http://reddit.minionflo.net" target="_blank">Reddit</a></p>
		<p align=center id="spotify-pos"><a id="spotify" href="http://spotify.minionflo.net" target="_blank">Spotify</a></p>
	    <p align=center id="twitter-pos"><a id="twitter" href="http://twitter.minionflo.net" target="_blank">Twitter</a></p>
	    <p align=center id="instagram-pos"><a id="instagram" href="http://instagram.minionflo.net" target="_blank">Instagram</a></p>
	    <p align=center id="twitch-pos"><a id="twitch" href="http://twitch.minionflo.net" target="_blank">Twitch</a></p>
	    <p align=center id="tiktok-pos"><a id="tiktok" href="http://tiktok.minionflo.net" target="_blank">Tiktok</a></p>
	    <p align=center id="steam-pos"><a id="steam" href="http://steam.minionflo.net" target="_blank">Steam</a></p>
	    <p align=center id="github-pos"><a id="github" href="http://github.minionflo.net" target="_blank">Github</a></p>
	    <p align=center id="facebook-pos"><a id="facebook" href="http://facebook.minionflo.net" target="_blank">Facebook</a></p>
		<p align=center id="tellonym-pos"><a id="tellonym" href="http://tellonym.minionflo.net" target="_blank">Tellonym</a></p>
		<p align=center id="snapchat-pos"><a id="snapchat" href="http://snapchat.minionflo.net" target="_blank">Snapchat</a></p>
	    <p align=center id="email-pos"><a id="email" href="mailto:public@minionflo.net" target="_blank">E-Mail</a></p>
    </body>
</html