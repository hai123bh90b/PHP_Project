<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border="2" cellpadding = "20px" cellspacing = "0px">
        <tr>
            <th>Student Name</th>
            <th>Age</th>
            <th>City</th>
            <th colspan = "2">Actions</th>

    <tbody>

    <?php

    include 'config.php';
    $ReadData = new Database();
    $sql = $ReadData->ReadData();
    while($row = mysqli_fetch_array($sql))
    {
    ?>
     <tr>  

    <td><?php echo ($row['student_name']);?></td>
    <td><?php echo ($row['age']);?></td>
    <td><?php echo ($row['city']);?></td>

    <td><a href="update.php?id=<?php echo ($row['id']);?>">
    <button  onClick="return confirm('Do you really want to Update');">Edit</button></a></td>
    <td><a href="index.php?del=<?php echo ($row['id']);?>">
    <button  onClick="return confirm('Do you really want to delete');">Delete</button></a></td>
    </tr>
<?php

    }
    ?>
    
    
    </tbody>
    </table>
    <br>
    <a href="insert.php">Add New Student</a>
</body>
</html>