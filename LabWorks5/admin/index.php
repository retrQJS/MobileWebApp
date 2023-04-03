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
		include("admin-menu.php");
		include ("../db_connection.php");
	?>
	<body class='sectionz'>
		<h1 class='jbu-title'id='section-head'>Welcome to JBU ADMIN Homepage</h1>
		<div id="holderD">
			<div id='section-head' class="child">
				<h1>All Faculty </h1>
				<h3>Department - Name - ID</h3>
				<?php
					$sql3="SELECT * FROM faculty_tab";
					$result3=$connect->query($sql3);
					while ($row3 = $result3->fetch_assoc()) {
						echo $row3['fac_dept']." - ".$row3['fac_name']." - ".$row3['fac_id']."<br>";
					}
				?>
			</div>
			<div id='section-head'class="child">
				<h1>All Students</h1>
				<h3> Student Name - Student ID - Major</h3>
				<?php
					$uid = $_SESSION['id'];
					$sql5 = "SELECT * FROM student_tab";
					$result5=$connect->query($sql5);
					while ($row5 = $result5->fetch_assoc()) {
						echo $row5['stu_name']." - ".$row5['stu_id']." - ".$row5['stu_major']."<br>";
					}
				?>
			</div>
		</div>
	</body>
</html>