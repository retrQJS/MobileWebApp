<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link href='../css/styles.css'>
</head>
<body style='background-color: royalblue'>
<?php
    $cap = $_POST['captcha'];
    if($cap == 'xYz91242Sl'){
        include ("db_connection.php");
        $uid=$_POST['userid'];
        $pwd=$_POST['password'];

	    $sql="SELECT * FROM users_tab where userid='$uid' AND password='$pwd'";
	    $result=$connect->query($sql);
	    $row = $result->fetch_assoc(); 
 
        if($row['role']==='S')  //Students
        {
            $_SESSION['id']=$uid;
            $_SESSION['pwd']=$pwd;
	        $_SESSION['role'] = "S";
            header('location: ./student/index.php');
        }
	    elseif($row['role']==='F')  //Faculty
        {
            $_SESSION['id']=$uid;
            $_SESSION['pwd']=$pwd;
	        $_SESSION['role'] = "F";
            header('location: ./faculty/index.php'); 
        }
	    elseif($row['role']==='A')  //Admin
        {   
            $_SESSION['id']=$uid;
            $_SESSION['pwd']=$pwd;
	        $_SESSION['role'] = "A";
            header('location: ./admin/index.php');
        }
	    else
	    {
		    header('location: login-error.php');
	    }
    //-------------------------------Login Failed---------------------
    }
    else{
        echo "<div id='captc' style='margin: auto;width: 20%'>";
        echo "<center>you have failed the captcha. try again.</center>";
        echo "<center><a class='btn btn-primary'href='login.php'>Return To Login</a></center>";
        echo "</div>";
    }
    
?>
