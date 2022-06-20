<?php 
include 'config.php';
include 'includes/head.php';
//get row id from index page
$v_id=$_GET['edit'];
$sql=mysqli_query($conn, "SELECT * FROM v_table WHERE v_id='$v_id' ");
$row=mysqli_fetch_assoc($sql);

//after submit button in update form has been clicked
if(isset($_POST['edit'])){
    
    $v_id=$_POST['v_id'];
    $name=$_POST['name'];
    $gear=$_POST['gear'];
    $added=$_POST['added'];
    $updated=$_POST['updated'];
    
    $update = mysqli_query($conn, "UPDATE v_table SET name='$name', gear='$gear', added='$added', updated='$updated' WHERE v_id='$v_id' ");
    if (!$update){
        echo" error ";
    }else{
        echo "<script type='text/javascript'>alert('Updated Successfully'); location.href = 'index.php';</script>";
        header("location:index.php");
    }
}
//after submit button in update form has been clicked
$date = date('Y-m-d');
?>

<div class="container-fluid bg-light mt-5 p-5">
    <div class="row pt-2 pb-2 ">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form action="update.php" method="post">
                        
                        VID :<input class="form-control" type="text" name="v_id" value="<?php echo $row['v_id']; ?>" required readonly>
                        Name :<input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" required>
                        Gear :<input class="form-control" type="text" name="gear" value="<?php echo $row['gear']; ?>" >
                        Added :<input class="form-control" type="date" name="added" value="<?php echo $row['added']; ?>" >
                        Updated :<input class="form-control" type="date" name="updated" value="<?php echo"$date"; ?>" readonly hidden>
                        <div class="mt-2">
                        <input class="btn btn-sm btn-primary" type="submit" name="edit" placeholder="edit">
                        <a class="btn btn-sm btn-danger" value="Reset" onclick="window.location='index.php'">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>