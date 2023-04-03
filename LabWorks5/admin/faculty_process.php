<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<link rel="stylesheet" href="../css/styles2.css"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	</head>
	<body class='sectionz'>
	<?php include "../header.php" ?>
	<?php include "admin-menu.php" ?>
	<?php

	$fid = $_POST['fac_id'];
	$nm= $_POST['fac_name'];
	$yr = $_POST['doj'];
	$qual = $_POST['qual'];
	$dept = $_POST['dept'];

	include("../db_connection.php");

	$sql = "INSERT INTO faculty_tab (fac_id, fac_name, fac_doj, fac_qual, fac_dept)
			VALUES ('$fid', '$nm', '$yr', '$qual', '$dept')";
	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		 echo "Error: ". $connect->error;
	}
	else{
		echo "<center><h1 class='jbu-title' id='success'>Sucessfully Added Faculty</h1></center>";
		echo "<center><a id='home-but' class='btn btn-primary'href='index.php'>Return Home</a></center>";
	}
	?>
	</body>
</html>