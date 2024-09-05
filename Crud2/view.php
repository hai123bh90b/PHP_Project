<?php
include 'config.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn , $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Categories</title>
</head>
<body>
    <h1>Categories</h1>
    <table border="2" cellpadding = "20px" cellspacing = "0px">
        <tr>
            <th>Category Name</th>
            <th>Password</th>
            <th>Description</th>
            <th>Status</th>
            <th colspan = "2">Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr>";
                echo "<td>" . $row['categoryname'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No categories found</td></tr>";
        }
        ?>
    </table>
    <a href="index.php">Add New Category</a>
</body>
</html>
