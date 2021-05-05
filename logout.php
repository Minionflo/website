<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $_login = "Logged in";
    $_logbutton = '<a class="activ" href="/logout.php">Logout</a>';
    $_register = '';
} else {
    $_login = "Not Logged in";
    $_logbutton = '<a href="/login.php">Login</a>';
    $_register = '<a href="/register.php">Register</a>';
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
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/social-media.php">Social Media</a></li>
        <li><a href="/minecraft.php">Minecraft</a><li>
        <li><?php echo $_register; ?></li>
        <li><?php echo $_logbutton; ?></li>
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