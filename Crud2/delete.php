<?php
include 'config.php';

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $sql = "DELETE FROM category WHERE id = $id";
    
    if ($conn->query($sql) == TRUE) {
        echo "Category deleted successfully!";
        
        header("Location: view.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
} else { 
    echo "Invalid request.";
}
?>
