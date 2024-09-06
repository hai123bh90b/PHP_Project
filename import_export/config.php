<?php
function getdb() 
{
    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $dbname = "import";

 
    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn->connect_error) 
    {
        die("Database connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
