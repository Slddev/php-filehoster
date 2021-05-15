<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Check if user has a dedicated user directory folder. If not make it and install the check_auth.php script
$userName = $_SESSION["username"];

if (!file_exists("users/{$userName}")) {
    mkdir("users/{$userName}", 0777, true);
}

copy('img/.htaccess', "users/{$userName}/.htaccess");

if (!file_exists("userdata/{$userName}")) {
    mkdir("userdata/{$userName}", 0777, true);
}

if (!file_exists("userdata/{$userName}/avatar.jpg")) {
    copy('userdata/default/avatar.jpg', "userdata/{$userName}/avatar.jpg");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; background-color: #404040; }
	.my-5{ color: white; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to CDN.</h1>
    <p>
        <a href="account.php" class="btn btn-warning">Account Settings</a>
	<br><br>
	<a href="pdf-upload.php" class="btn btn-primary">Document Upload (50mb Limit)</a>
	<a href="img-upload.php" class="btn btn-primary">Image Upload (No Limit)</a>
	<a href="users/<?= $_SESSION["username"] ?>" class="btn btn-primary">Personal Folder</a>
    </p>
</body>
</html>