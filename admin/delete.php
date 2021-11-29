<?php
include "dbconnection.php";
$id = $_GET['id'];

$del = mysqli_query($con,"delete from user where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:manage-users.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>