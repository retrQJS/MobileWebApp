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
		include("student-menu.php");
		include ("../db_connection.php");
	?>
	<body class='sectionz'>
		<h1 class='jbu-title' id='section-head'>Welcome to JBU Student Course Registration</h1>
		<div id="holderD2">
			<form  name="reg-form" method="POST" action="register_process.php" >
                Course ID: <input class="textbox" name="course_id" /><br>
                Student ID: <input class="textbox" name="stu_id" /><br>
                Faculty ID:<input class="textbox" name="fac_id" /><br>
				Semester: <input class='textbox' name='semester'/>
                <input id="button" class="btn btn-primary"type="submit" value="Register"/>
            </form>
		</div>
	</body>
</html>