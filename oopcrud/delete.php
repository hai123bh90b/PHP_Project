<?php

include 'config.php';

if(isset($_GET['del']))
{

    $rowid = $_GET['del'];

    $del = new Database();
    $sql = $del->DeleteData($rowid);


    if($sql)
    {
        
    echo "<script>alert('Record Updated successfully');</script>";

    echo "<script>window.location.href='index.php'</script>";

    }

}

?>
