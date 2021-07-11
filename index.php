<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn , $sql);
    if($result -> num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location:home_website.php");
    } else{
        echo "<script>alert('Email or Password is wrong')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectrum</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <p class="welcome">WELCOME TO SPECTRUM</p>
        <img src="Assets1\mozclub logo.png" alt="LOGO">
        <form action="" method="POST" class="login-email">
            <p class="login-text">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password"  required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Get Ready</button>
            </div>
            <p class="Login-register-text">Don't have an account? <a href="register.php">Register here</a></p>

        </form>
    </div>
</body>

</html>