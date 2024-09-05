<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>WELCOME</h2>

    <form action="" method = "POST">
        <div>
            <input type="text" name = "studentname" placeholder = "Enter Student Name" required ><br><br>

        </div>

        <div>
            <input type="text" name = "age" placeholder = "Enter Your Age" required><br><br>
        </div>

        <div>
            <input type="text" name = "city" placeholder = "Enter Your City" required><br><br>
        </div>
        
        <div>

            <input type="submit" name = "insert" value = "submit">
        </div>
    </form>

    <?php

     include 'config.php';

     $insert = new Database();

     if(isset($_POST['insert']))
     {
        $student_name = $_POST['studentname'];
        $age = $_POST['age'];
        $city = $_POST['city'];

        $query = $insert->InsertData($student_name , $age , $city);

        if($query)
        {
            echo "<script>alert('Insert Successfully')</script>";
            echo "<script> window.location.href = 'index.php'</script>";
        }

        else
        {
            echo "<script>alert('Error Occured!')</script>";
            echo "<script> window.location.href = 'index.php'</script>";
        }
     }


    ?>
    <br>

    <a href="index.php">View Student Record</a>





    
</body>
</html>