<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form action="" method="POST">
        <input type="email" name="email" placeholder="Enter Your Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Your Password" required><br><br>
        <input type="submit" name="login-btn" value="Login">
    </form> 

    <br><a href="signup.php">Dont have an Account? Signup here</a>

    <?php
    if (isset($_POST['login-btn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `login` WHERE `email` = '$email' AND `password` = '$password'";

        $select = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_array($select);
        if ($select) 
        {

            $row = mysqli_num_rows($select);
            $username = $fetch['username'];

            session_start();
            $_SESSION['username'] = $username;
            header("location:welcome.php");
        } else 
        {
            
            echo "Error" . mysqli_error($conn);
        }

    }
    ?>
</body>
</html>
