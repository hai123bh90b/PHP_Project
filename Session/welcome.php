<?php
include "config.php";
session_start();

if (!isset($_SESSION['username'])) 
{
    header("Location: login.php");
    exit();
}

?>


<h2>WELCOME <?php echo $_SESSION['username']; ?>

</h2>

<a href="logout.php">Logout</a>