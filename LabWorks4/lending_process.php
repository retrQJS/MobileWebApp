<html>
	<head>
		<link rel="stylesheet" href="./css/styles.css"/>
		<link rel="stylesheet" href="./css/styles2.css"/>
	</head>
	<body>
	<?php include "banner.php" ?>
	<?php include "menu.php" ?>
	<?php

	$bid=$_POST['bookid'];
	$uid = $_POST['userid'];
	$dol = $_POST['dol'];
	$dor = $_POST['dor'];
	$status = $_POST['status'];
	$remarks = $_POST['remarks'];
	$lid=rand(1,10000);

	include("db_connection.php");

	$sql = "INSERT INTO lending_book_tab (lending_id, book_id, user_id, date_of_lending,date_of_return,status,remarks) 
			VALUES ($lid, $bid, $uid, $dol, $dor, '$status', '$remarks' )";
	$result = $connect->query($sql);

	if ($result == FALSE)
	{
		 echo "Error: ". $connect->error;
	}
	else{
		echo "<h1 id='success'>Sucessfully lended book</h1>";
		echo "<center><a id='home-but'href='home.php'>Return Home</a></center>";
	}
	?>
	</body>
</html>