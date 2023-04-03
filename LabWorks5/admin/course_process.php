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

	$cid = $_POST['course_id'];
	$nm = $_POST['course_name'];
	$fid = $_POST['fac_id'];
	$oi = $_POST['oi'];
	$cred= $_POST['cred'];
	$req = $_POST['req'];
	$type = $_POST['type'];

	include("../db_connection.php");

	$sql = "INSERT INTO courses_tab (course_id, course_name, fac_id, offered_in, credits, pre_req, type)
			VALUES ('$cid', '$nm', '$fid', '$oi', '$cred', '$req', '$type')";
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