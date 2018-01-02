<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id = $_GET['id'];
//var_dump($_GET);
//deleting the row from table
$query="DELETE FROM table1 WHERE id=$id";
$result = mysqli_query($conn,$query);
//redirecting to the display page
header("Location:list.php");
?>

