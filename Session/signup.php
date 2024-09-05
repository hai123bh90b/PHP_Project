<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body> 
    <h2>Sign Up</h2>
    <form action="" method  = "POST">
        <input type="text" name  = "username" placeholder = "Enter Your Name " required> <br><br>
        <input type="email" name = "email" placeholder = "Enter Your Email" required> <br><br>
        <input type="password" name = "password" placeholder = "Enter Password" required> <br><br>

        <input type="submit" name = "signup-btn" value = "SignUp">

    </form>
    <br><a href="login.php">Already have an account? Login here</a>

    <?php 
    session_start();

    if(isset($_POST['signup-btn'])) 
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


    $sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) 
     {
        $_SESSION['username'] = $username;
    
        header("Location: welcome.php");
        exit();
    } else
    {
        echo "<script>alert('Error: Could not sign up!')</script>";
    }
} 
    ?>









    
</body>
</html>