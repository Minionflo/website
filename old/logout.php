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

<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/font/font.css">
    <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://Minionflo.net/css/logout.css">
    
</head>
<body>
    <ul class="navbar">
        <li><a class="navbar-li-a"href="/index.php">Home</a></li>
        <li><a class="navbar-li-a" href="/social-media.php">Social Media</a></li>
        <li><a class="navbar-li-a" href="/programming.php">Programming</a></li>
        <li><a class="navbar-li-a" href="/gaming.php">Gaming</a></li>
        <li><a class="navbar-li-a" href="/minecraft.php">Minecraft</a><li>
        <li><a class="navbar-li-a activ" href="/logout.php">Logout</a></li>
        <li><a class="navbar-li-a" href="/profile.php">Profil</a></li>
    </ul>
    <h1 align=center class="title">Logout</h1>
    <div class="login-page">
        <div class="form">
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="submit form-group">
                <input type="submit" id="submit" value="Logout" class="button">
            </div>
        </form>
        </div>
    </div>    
</body>
</html>