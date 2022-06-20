<?php 
include 'config.php';

$v_id=$_GET['del'];
$sql=mysqli_query($conn, "DELETE FROM v_table WHERE v_id='$v_id' ");

if(!$sql){
    echo"<script>alert('error'); location.href = 'index.php';</script>";
}else{
    echo"<script>alert('Deleted Successfully'); location.href = 'index.php';</script>";
}

?>