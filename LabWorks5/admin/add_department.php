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
		<h1 class='jbu-title'id='section-head'>Welcome to Department to DB Addition </h1>
		<div id="holderD2">
			<form  name="reg-form" method="POST" action="dept_process.php" >
                Department ID: <input class="textbox" name="dep_id" /><br>
				Department Name: <input class="textbox" name="dep_name" /><br>
                Department Chair :<input class="textbox" name="chair" /><br>
				Department Dean: <input class='textbox' name='dean'/>
				Budget: <input class='textbox' name='bud'/>
                <input id="button" class="btn btn-primary"type="submit" value="Add Department"/>
            </form>
		</div>
	</body>
</html>