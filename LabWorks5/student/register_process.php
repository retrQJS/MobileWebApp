<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<link rel="stylesheet" href="../css/styles2.css"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	</head>
	<body class='sectionz'>
	<?php include "../header.php" ?>
	<?php include "student-menu.php" ?>
	<?php

	$cid = $_POST['course_id'];
	$sid = $_POST['stu_id'];
	$fid = $_POST['fac_id'];
	$semester = $_POST['semester'];
	$rid=rand(1,10000);

	include("../db_connection.php");

	$sql = "INSERT INTO registration_tab (reg_id, course_id, stu_id, fac_id, semester) 
			VALUES ('$rid', '$cid', '$sid', '$fid', '$semester')";
	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		 echo "Error: ". $connect->error;
	}
	else{
		echo "<center><h1 class='jbu-title'id='success'>Sucessfully registered</h1></center>";
		echo "<center><a id='home-but' class='btn btn-primary'href='index.php'>Return Home</a></center>";
	}
	?>
	</body>
</html>