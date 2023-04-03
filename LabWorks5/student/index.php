<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/styles2.css" />
	</head>
	<?php 
		include("../header.php");
		include("student-menu.php");
		include ("../db_connection.php");
	?>
	<body class='sectionz'>
		<h1 class='jbu-title'id='section-head'>
			Welcome to JBU Student Homepage
		</h1>
		<div id="holderD">
			<div id='section-head' class="child">
				<h1>Faculty in
				<?php
					$uid=$_SESSION['id'];
					$sql2="SELECT * FROM student_tab WHERE stu_id='$uid'";
					$result2=$connect->query($sql2);
					$row2 = $result2->fetch_assoc();
					echo $row2['stu_major'];
				?>
				Department</h1>
				<h3>Name - Email</h3>
				<?php
					$sql2="SELECT * FROM student_tab WHERE stu_id='$uid'";
					$result2=$connect->query($sql2);
					$row2 = $result2->fetch_assoc();
					$major = $row2['stu_major'];
					$sql3="SELECT * FROM faculty_tab where fac_dept='$major'";
					$result3=$connect->query($sql3);
					while ($row3 = $result3->fetch_assoc()) {
						echo $row3['fac_name']." - ".$row3['fac_id']."<br>";
					}
				?>
			</div>
			<div id='section-head'class="child">
				<h1>List of Courses</h1>
				<h3> Course ID - Course Name</h3>
				<?php
					$sql5 = "SELECT * FROM courses_tab";
					$result5=$connect->query($sql5);
					while ($row5 = $result5->fetch_assoc()) {
						echo $row5['course_id']." - ".$row5['course_name']."<br>";
					}
				?>
			</div>
			<div id='section-head'class="child">
				<h1>Personal Information</h1>
				<?php
					$uid=$_SESSION['id'];
					$sql="SELECT * FROM student_tab where stu_id='$uid'";
					$result=$connect->query($sql);
					$row = $result->fetch_assoc();
					echo "Student ID: ";
					echo $row['stu_id'].'<br>';
					echo "Student Name: ";
					echo $row['stu_name'].'<br>';
					echo "Enrollment Year: ";
					echo $row['enrollment_year'].'<br>';
					echo "Major & Graduation Year: ";
					echo $row['stu_major'].' Class of '.$row['grad_year'].'<br>';
					echo "CGPA: ";
					echo $row['stu_cgpa'];
				?>
			</div>
		</div>
	</body>
</html>
