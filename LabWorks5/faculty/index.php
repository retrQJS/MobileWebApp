<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles2.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	</head>
	<?php 
		include("../header.php");
		include("faculty-menu.php");
		include ("../db_connection.php");
	?>
	<body class='sectionz'>
		<h1 id='section-head' class='jbu-title'>Welcome to JBU Faculty Homepage</h1>
		<div id="holderD">
			<div id='section-head' class="child">
				<h1>Current Semester Courses </h1>
				<h3>You are teaching the following: </h3>
				<?php
					$uid = $_SESSION['id'];
					$sql3="SELECT * FROM courses_tab WHERE fac_id='$uid'";
					$result3=$connect->query($sql3);
					while ($row3 = $result3->fetch_assoc()) {
						echo $row3['course_id']." - ".$row3['course_name']."<br>";
					}
				?>
			</div>
			<div id='section-head'class="child">
				<h1>Registered Students</h1>
				<h3> Course Name - Student ID</h3>
				<?php
					$uid = $_SESSION['id'];
					$sql5 = "SELECT * FROM registration_tab WHERE fac_id='$uid'";
					$result5=$connect->query($sql5);
					while ($row5 = $result5->fetch_assoc()) {
						echo $row5['course_id']." - ".$row5['stu_id']."<br>";
					}
				?>
			</div>
			<div id='section-head'class="child">
				<h1>Personal Information</h1>
				<?php
					$uid=$_SESSION['id'];
					$sql="SELECT * FROM faculty_tab where fac_id='$uid'";
					$result=$connect->query($sql);
					$row = $result->fetch_assoc();
					echo "Faculty ID: ";
					echo $row['fac_id'].'<br>';
					echo "Faculty Name: ";
					echo $row['fac_name'].'<br>';
					echo "Date of Join: ";
					echo $row['fac_doj'].'<br>';
					echo "Qualifications: ";
					echo $row['fac_qual'].'<br>';
					echo "Department: ";
					echo $row['fac_dept'];
				?>
			</div>
		</div>
	</body>
</html>
