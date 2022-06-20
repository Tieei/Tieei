<!--
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
	<link href="libraries/bs5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- datatable CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
	<!-- jQuery -->
	<script src="libraries/jQuery_3_6.js"></script>
    <!--chartjs-->
    <script src="libraries/Chartjs.3/dist/Chart.min.js"></script>
    <script src="libraries/Chartjs.3/dist/Chart.js"></script>
    <script src="libraries/Chartjs.3/dist/utils.js"></script>
    <script src="libraries/Chartjs.3/dist/Chart.esm.min.js"></script>
    <style>
    canvas{
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
    #chartjs-tooltip {
			opacity: 1;
			position: absolute;
			background: rgba(0, 0, 0, .7);
			color: white;
			border-radius: 3px;
			-webkit-transition: all .1s ease;
			transition: all .1s ease;
			pointer-events: none;
			-webkit-transform: translate(-50%, 0);
			transform: translate(-50%, 0);
		}
    .chartjs-tooltip-key {
			display: inline-block;
			width: 10px;
			height: 10px;
			margin-right: 10px;
		}
    </style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"><img src="img/Logo-Blue-02.webp" height="50px"> </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" aria-current="page" href="index.php">Home</a> </li>
					<li class="nav-item"> <a class="nav-link" href="doc.php">Documentation</a> </li>
				</ul>
				<form class="d-flex text-white"><a href="doc.php" class="text-white"> Portcall DBMS v.1</a></form>
			</div>
		</div>
	</nav>