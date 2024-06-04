<?php
require_once 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DictionaryNet - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box-login">
        <p>Sign-Up</p>
    <div class="login">
        <form action="" method="post">
            <label for="uname"><b>Username</b></label><br>
            <input type="text" placeholder="Username" name="uname" required><br>
            <label for="email"><b>Email</b></label><br>
            <input type="email" placeholder="Email" name="email" required><br>
            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Password" name="psw" required><br>
            <button type="submit" class="btn">Sign Up</button>
        </form>
        </div>
            <div class="acc-sign"><a href="login.php">Already have an account? Log in now</a></div>
        </div>
</body>
</html>