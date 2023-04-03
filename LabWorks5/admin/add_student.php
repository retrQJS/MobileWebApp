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
		<h1 class='jbu-title'id='section-head'>Welcome to Student to DB Addition </h1>
		<div id="holderD2">
			<form  name="reg-form" method="POST" action="student_process.php" >
                Student ID: <input class="textbox" name="stu_id" /><br>
                Student Name: <input class="textbox" name="stu_name" /><br>
                Enrollment Year:<input class="textbox" name="yr" /><br>
				Major: <input class='textbox' name='major'/>
				CGPA: <input class='textbox' name='cgpa'/>
				Graduation Year: <input class='textbox' name='gradyear'/>
                <input id="button" class="btn btn-primary"type="submit" value="Add Student"/>
            </form>
		</div>
	</body>
</html>