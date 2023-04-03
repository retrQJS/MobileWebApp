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

	$did = $_POST['dep_id'];
	$nm = $_POST['dep_name'];
	$cr = $_POST['chair'];
	$dn = $_POST['dean'];
	$bud = $_POST['bud'];

	include("../db_connection.php");

	$sql = "INSERT INTO dept_tab (dept_id, dept_name, dept_chair, dept_dean, budget)
			VALUES ('$did', '$nm', '$cr', '$dn', '$bud')";
	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		 echo "Error: ". $connect->error;
	}
	else{
		echo "<center><h1 class='jbu-title'id='success'>Sucessfully Added Department</h1></center>";
		echo "<center><a id='home-but' class='btn btn-primary'href='index.php'>Return Home</a></center>";
	}
	?>
	</body>
</html>