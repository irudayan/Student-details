<?php
//database conection  file
include('dbconnection.php');

//Code for deletion
if(isset($_GET['id']))
{
$rid=$_GET['id'];
$sql=mysqli_query($con,"delete from student where ID=$rid");
echo "<script>alert('Data deleted');</script>"; 
header('Location:dashboard.php');
} 
// print_r($rid);exit;
?>