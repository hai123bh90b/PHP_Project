<?php

$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "session";

$conn = mysqli_connect($servername , $username , $password , $dbname);

if($conn)
{
    echo " ";
}

else
{
    echo "Not Connected";
}

?>