<?php
require 'vendor/autoload.php'; 

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

include_once 'config.php';

$conn = getdb();

if (isset($_POST["import"])) {
    $filename = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0)
     {
        $spreadsheet = IOFactory::load($filename);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();

        array_shift($data);

        foreach ($data as $row) {
            if (count($row) >= 5) 
            {
                $id = mysqli_real_escape_string($conn, $row[0]);
                $firstname = mysqli_real_escape_string($conn, $row[1]);
                $lastname = mysqli_real_escape_string($conn, $row[2]);
                $email = mysqli_real_escape_string($conn, $row[3]);
                $reg_date = mysqli_real_escape_string($conn, $row[4]);

                $sql = "INSERT INTO employee (id, firstname, lastname, email, reg_date) VALUES ('$id', '$firstname', '$lastname', '$email', '$reg_date')";

                $result = mysqli_query($conn, $sql);

                if (!$result) 
                {
                    echo "<script type=\"text/javascript\">
                          alert(\"Error: " . mysqli_error($conn) . "\");
                          window.location = \"index.php\"
                          </script>";
                    exit;
                }
            } 
            else 
            {
                echo "<script type=\"text/javascript\">
                      alert(\"Invalid data format in XLSX file.\");
                      window.location = \"index.php\"
                      </script>";
                exit;
            }
        }

        echo "<script type=\"text/javascript\">
              alert(\"XLSX File has been successfully Imported.\");
              window.location = \"index.php\"
              </script>";
    } 
    
    else 
    {
        echo "<script type=\"text/javascript\">
              alert(\"Error: File is empty or not a valid XLSX.\");
              window.location = \"index.php\"
              </script>";
    }
}


if(isset($_POST["Export"])){
     
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('id', 'firstname', 'lastname', 'email', 'reg_date'));  
    $query = "SELECT * from employee ORDER BY id ASC";  
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output);  
}  


function get_all_records() {
    $conn = getdb();
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<table border='2' cellpadding = '20px' cellspacing = '0px'><thead><tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Reg Date</th>
            </tr></thead><tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>" . ($row['id']) . "</td>
                <td>" . ($row['firstname']) . "</td>
                <td>" . ($row['lastname']) . "</td>
                <td>" . ($row['email']) . "</td>
                <td>" . ($row['reg_date']) . "</td>
            </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "You have no records";
    }
}
?>
