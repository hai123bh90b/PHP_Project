<?php
include 'config.php';


if(isset($_GET['id'])) {
    $stdid = intval($_GET['id']);
} else {
    die('ID not given in URL');
}


$res = new Database();


$query = $res->ReadOneData($stdid);

if ($row = mysqli_fetch_array($query)) 
{
    ?>
    <form action="" method="POST">
        <label for="studentname">Student Name</label>
        <input type="text" name="studentname" value="<?php echo($row['student_name']); ?>" required> <br><br>

        <label for="age">Age</label>
        <input type="text" name="age" value="<?php echo($row['age']); ?>" required> <br><br>

        <label for="city">City</label>
        <input type="text" name="city" value="<?php echo($row['city']); ?>" required> <br><br>

        <input type="submit" name="update" value="Update">
    </form>
    <?php
} else {
    echo "No record found for ID: " . $stdid;
}
?>

<?php

if(isset($_POST['update'])) 
{
    $student_name = $_POST['studentname'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    $sql = $res->UpdateData($stdid, $student_name, $age, $city);

    if ($sql) {
        echo "<script>alert('Record Updated Successfully');</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Failed to Update Record');</script>";
    }
}
?>
