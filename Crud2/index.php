<?php 
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action =" index.php" method = "POST">
            <input type="text" name = "categoryname" placeholder = "Enter Category Name"><br><br>
            <input type="password" name = "password" placeholder = "Enter The Password"><br><br>
            <textarea name="description" id = "description" placeholder ="Enter Desciption"></textarea><br><br>

            <label for="status">Status:</label>

            <select name="status">
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            </select><br><br>

            <button type = "submit" name = "submit_btn" value = "submit" >Add Category</button><br>
            
        </form>
    </div>
           <br> <a href="view.php">View Category</a>



           <?php

           if(isset($_POST['submit_btn']))
           {
             $categoryname = $_POST['categoryname'];
             $password = password_hash($_POST['password'] , PASSWORD_DEFAULT);
             $description = $_POST['description'];
             $status = $_POST['status'];



             $sql = "INSERT INTO category ( categoryname , password , description , status) VALUES ('$categoryname' , '$password' , '$description' , '$status')";

             $result = mysqli_query($conn , $sql);
           }

           ?>


        
</body>
</html>




