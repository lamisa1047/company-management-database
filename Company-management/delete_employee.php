​<?php
include "dbconfig.php";
if (isset($_GET['id'])) {
    $em_id = $_GET['id'];
    $sql = "DELETE FROM employee WHERE id ='$em_id'";
     $result = $conn->query($sql);
     if ($result == TRUE) {
        echo "Record deleted successfully.";
        header('Location: view_employee.php');
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>