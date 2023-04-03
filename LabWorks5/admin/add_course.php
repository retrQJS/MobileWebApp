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
		<h1 class='jbu-title'id='section-head'>Welcome to Course to DB Addition </h1>
		<div id="holderD2">
			<form  name="reg-form" method="POST" action="course_process.php" >
                Course ID: <input class="textbox" name="course_id" /><br>
				Course Name: <input class="textbox" name="course_name" /><br>
                Faculty ID:<input class="textbox" name="fac_id" /><br>
				Offered In: <input class='textbox' name='oi'/>
				Credits: <input class='textbox' name='cred'/>
				Pre-Requisites: <input class='textbox' name='req'/>
				Type: <input class='textbox' name='type'/>
                <input id="button" class="btn btn-primary"type="submit" value="Add Course"/>
            </form>
		</div>
	</body>
</html>
