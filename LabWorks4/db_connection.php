<?php
	$connect = new mysqli("localhost", "root", "", "lms.mdb");
	if($connect->connect_errno){
		die('Could not connect: '. $connect->connect_errno);
	}
?>