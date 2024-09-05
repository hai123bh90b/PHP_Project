<?php
session_start();

define('servername', 'localhost:4306');
define('username', 'root');
define('password', '');
define('dbname', 'oop');

class Database {

    private $db;

    function __construct() {
        $conn = mysqli_connect(servername, username, password, dbname);
        $this->db = $conn;

        if (mysqli_connect_errno()) {
            echo "Connection Failed: " . mysqli_connect_errno();
        } else {
            echo " ";
        }
    }

    public function InsertData($student_name, $age, $city) 
    {
        $query = mysqli_query($this->db, "INSERT INTO student (student_name, age, city) VALUES('$student_name', '$age', '$city')");
        return $query;
    }

    public function ReadData() 
    {
        $result = mysqli_query($this->db, "SELECT * FROM student");
        return $result;
    }

    public function ReadOneData($id) 
    {
        $id = intval($id); 
        $res = mysqli_query($this->db, "SELECT * FROM student WHERE id = $id"); 
        return $res;
    }

    public function UpdateData($id, $student_name, $age, $city) 
    {
        $id = intval($id);  
        $updrec = mysqli_query($this->db, "UPDATE student SET student_name = '$student_name', age = '$age', city = '$city' WHERE id = $id");
        return $updrec;
    }

    public function DeleteData($rowid)
    {
        $rowid = intval($rowid);  
        $del = mysqli_query($this->db, "DELETE FROM student WHERE id = $rowid"); 
        return $del;
    }
}
?>
