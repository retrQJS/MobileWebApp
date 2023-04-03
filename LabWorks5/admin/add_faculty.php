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
		<h1 class ='jbu-title'id='section-head'>Welcome to Faculty to DB Addition </h1>
		<div id="holderD2">
			<form  name="reg-form" method="POST" action="faculty_process.php" >
                Faculty ID: <input class="textbox" name="fac_id" /><br>
                Faculty Name: <input class="textbox" name="fac_name" /><br>
                Date of Join :<input class="textbox" type="date" name="doj" /><br>
				Qualification: <input class='textbox' name='qual'/>
				Department: <input class='textbox' name='dept'/>
                <input id="button" class="btn btn-primary"type="submit" value="Add Faculty"/>
            </form>
		</div>
	</body>
</html>