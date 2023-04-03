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

	$sid = $_POST['stu_id'];
	$nm = $_POST['stu_name'];
	$yr = $_POST['yr'];
	$major = $_POST['major'];
	$gpa = $_POST['cgpa'];
	$grad = $_POST['gradyear'];

	include("../db_connection.php");

	$sql = "INSERT INTO student_tab (stu_id, stu_name, enrollment_year, stu_major, stu_cgpa, grad_year) 
			VALUES ('$sid', '$nm', '$yr', '$major', '$gpa', '$grad')";
	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		 echo "Error: ". $connect->error;
	}
	else{
		echo "<center><h1 class='jbu-title'id='success'>Sucessfully Added Student</h1></center>";
		echo "<center><a id='home-but' class='btn btn-primary'href='index.php'>Return Home</a></center>";
	}
	?>
	</body>
</html>