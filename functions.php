<?php 

//functions
function vessel_count(){
include 'config.php';
    $sqls=mysqli_query($conn,"SELECT * FROM v_table");
    $rows=mysqli_num_rows($sqls);
    echo "<h3 class=''>". $rows ."</h3>";
}
function ps_count(){
include 'config.php';
    $sqls=mysqli_query($conn,"SELECT * FROM v_table WHERE gear ='ps' ");
    $rows=mysqli_num_rows($sqls);
    echo "<h3 class=''>". $rows ."</h3>";
}
function rc_count(){
include 'config.php';
    $sqls=mysqli_query($conn,"SELECT * FROM v_table WHERE gear ='rc' ");
    $rows=mysqli_num_rows($sqls);
    echo "<h3 class=''>". $rows ."</h3>";
}
function ll_count(){
include 'config.php';
    $sqls=mysqli_query($conn,"SELECT * FROM v_table WHERE gear ='ll' ");
    $rows=mysqli_num_rows($sqls);
    echo "<h3 class=''>". $rows ."</h3>";
}
function fc_count(){
include 'config.php';
    $sqls=mysqli_query($conn,"SELECT * FROM v_table WHERE gear ='fc' ");
    $rows=mysqli_num_rows($sqls);
    echo "<h3 class=''>". $rows ."</h3>";
}
function pnl_count(){
include 'config.php';
    $sqls=mysqli_query($conn,"SELECT * FROM v_table WHERE gear ='p & l' ");
    $rows=mysqli_num_rows($sqls);
    echo "<h3 class=''>". $rows ."</h3>";
}







?>