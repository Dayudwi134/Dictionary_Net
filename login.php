<?php
session_start();
require_once 'koneksi.php';

$error_msg = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username_email = $_POST['uname'];
    $password = $_POST['psw'];

    $sql = "SELECT * FROM tb_user WHERE username='$username_email' OR email='$username_email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { 
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) { 

            $_SESSION['username'] = $row['username'];
            header("Location: index.html");
            exit;

        } else {
            $error_msg = "Username/email atau password salah.";
        }

    } else {
        $error_msg = "Username/email tidak ditemukan.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DictionaryNet- Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box-login">
    <p>Log-In</p>
    <div class="login">
        <form action="" method="post">
            <label for="uname"><b>Username/Email</b></label><br>
            <input type="text" placeholder="Username/Email" name="uname" required><br>
            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Password" name="psw" required><br>
            <button type="submit" class="btn">Login</button>
           
            <?php if ($error_msg): ?> 
                <div class="error-msg"><?php echo $error_msg; ?></div> 
            <?php endif; ?>
            
        </form>
    </div>
        <div class="acc-sign"><a href="signup.php">Don't have an account? Sign up now</a></div>
    </div>
</body>
</html>