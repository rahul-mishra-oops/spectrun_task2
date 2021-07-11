<?php
include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email= '$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {

            $sql = "INSERT INTO users (username , email , password)
                VALUES ('$username' , '$email' , '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('You Are Now an Avenger')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Something Went Wrong')</script>";
            }
        } else {
            echo "<script>alert('Email Already Exists')</script>";
        }
    } else {
        echo "<script>alert('Password Do Not Match')</script>";
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
        <img src="Assets\mozclub logo.png" alt="LOGO">
        <form action="" method="POST" class="login-email">
            <p class="login-text">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Avengers Assemble</button>
            </div>
            <p class="Login-register-text">Already have an account? <a href="index.php">login here</a></p>

        </form>
    </div>
</body>

</html>