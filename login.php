<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php?login=true");
    exit;
}
 
// Include config file
require_once "php/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, email, password FROM users WHERE username = ? OR email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["email"] = $email;                           
                            
                            // Redirect user to welcome page
                            header("location: index.php?login=true");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password is wrong";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Social Media, HTML, CSS">
    <meta name="author" content="Minionflo">
    <meta name="description" content="Minionflo.net">
    <title>Login - Minionflo.net</title>
    <link rel="icon" href="/img/logo/128x128.png" />
    <link rel="manifest" href="/json/manifest.json">
    <link rel="stylesheet" type="text/css" href="/css/font/font.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/login.css">

</head>

<body>
    <ul class="navbar">
        <li><a class="navbar-li-a" href="/index.php">Home</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Me - </a></li>
        <li><a class="navbar-li-a" href="/social-media.php">Social Media</a></li>
        <li><a class="navbar-li-a" href="/programming.php">Programming</a></li>
        <li><a class="navbar-li-a" href="/gaming.php">Gaming</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Server - </a></li>
        <li><a class="navbar-li-a" href="/minecraft.php">Minecraft</a></li>
        <li><a class="navbar-li-a navbar-topic" > - Account - </a></li>
        <li><a class="navbar-li-a" href="/register.php">Register</a></li>
        <li><a class="navbar-li-a activ" href="/login.php">Login</a></li>
    </ul>
    <h1 align=center class="title">Login</h1>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <input placeholder="Username" type="text" name="username" class="input"
                        value="<?php echo $username; ?>">
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input placeholder="Password" type="password" name="password" class="input">
                </div>
                <div class="submit form-group">
                    <input type="submit" id="submit" value="Login" class="button">
                    <span class="message"><?php echo $username_err; ?></span>
                    <span class="message"><?php echo $password_err; ?></span>
                </div>
            </form>
        </div>
    </div>
</body>

</html>