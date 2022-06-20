<?php
include'../config.php';


?><!--
Offshore Database Developer  | Ministry of Fisheries and Marine Services
 ___________  ___   ________
/___   ____/ /  /  /  _____/     
   /  /     /  /  /  /__
  /  /     /  /  /  ___/
 /  /     /  /  /  /____
/__/     /__/  /_______/
Portcall Database Version 1.
Copyright 2022 . Developed by: Tieei Eita | shadye208@gmail.com
developed from June 14 2022. Completed
-->
<!doctype html>
<html lang="en">

<head>
	<title>Port Call</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../style.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<!-- datatable CSS -->
	<link href="../libraries/bs5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../libraries/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="../libraries/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- datatable CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
	<!-- jQuery -->
	<script src="../libraries/jQuery_3_6.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="../img/Logo-Blue-02.webp" height="50px"> </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" aria-current="page" href="../index.php">Home</a> </li>
					<li class="nav-item"> <a class="nav-link" href="../doc.php">Documentation</a> </li>
				</ul>
				<form class="d-flex text-white"><a href="doc.php" class="text-white"> Portcall DBMS v.1</a></form>
			</div>
		</div>
	</nav>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Log Journal</div>
        <div class="card-body">
            <form action="index.php" method="post" class="form-group">
                <label class="form-label">Date</label>
                <input class="form-control w-50" type="date" name="dt">
                
                <label class="form-label">Progress</label>
                <input class="form-control" type="textarea" name="progress">
                
                <label class="form-label">OFD Advice</label>
                <input class="form-control" type="textarea" name="advice">
                
                <label class="form-label">Solutions</label>
                <input class="form-control" type="textarea" name="solution"><br>
                
                <input type="submit" name="submit" value="submit" class="btn btn-sm btn-info">
            </form>
        </div>
        
				<div class="card">
					<div class="card-header">Registered Vessels</div>
					<div class="card-body overflow-auto">
						<?php 
                    $results = mysqli_query($conn, "SELECT * FROM dev_log"); ?>
							<table id="log" class="table table-striped table-hover">
								<thead style="background-color:#3c6382;color:white;">
									<tr>
										<th>id</th>
										<th>date</th>
										<th>progress</th>
										<th>Advice</th>
										<th>Solution</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php while ($row = mysqli_fetch_array($results)) { ?>
									<tr class="small">
										<td>
											<?php echo $row['id']; ?>
										</td>
										<td>
											<?php echo $row['dt']; ?>
										</td>
										<td>
											<?php echo $row['progress']; ?>
										</td>
										<td>
											<?php echo $row['advice']; ?>
										</td>
										<td>
											<?php echo $row['solution']; ?>
										</td>
										<td> 
                                            <a href="vessel_view.php?view=<?php echo $row['v_id'];?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-eye"></i>
                                            </a> 
                                            <a href="update.php?edit=<?php echo $row['v_id']; ?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-pencil"></i>
                                            </a> 
                                            <a href="portcall.php?portcall=<?php echo $row['v_id']; ?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
								            <a href="delete.php?del=<?php echo $row['v_id']; ?>" class="btn btn-sm btn-light">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
									</tr>
									<?php } ?>
							</table>
					</div>
				</div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script> 
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" ></script> 
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js" ></script>
<!--==================DATATABLE Scripts=================-->
<script>
$(document).ready(function () {
    $('#log').DataTable();
});
</script>
<!--==================DATATABLE Scripts=================-->
<script>
var myModal = document.getElementById('exampleModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
</script>
<!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="libraries/bs5/js/bootstrap.min.js"></script>

  </body>
</html>