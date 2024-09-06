<?php

include_once 'config.php';
include_once 'function.php';

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
        <form action="function.php" method = "POST" name = "upload_excel" enctype = "multipart/form-data">
        <label for="filebutton">Select File </label>
        <input type="file" name = "file" id = "file" required> <br><br>

        <label for="singlebutton">Import Data</label>
        <button type = "submit" id = "submit" name = "import">Upload</button>
    </form>
    <br>
    </div>

    <div>
        <form class="form-horizontal" action="function.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <div class="form-group">
                <div>
                    <input type="submit" name="Export" class="btn btn-success" value="Export to CSV"/>
                </div>
            </div>                    
        </form>           
    </div>

    <?php
      get_all_records();
    ?>

</body>
</html>
