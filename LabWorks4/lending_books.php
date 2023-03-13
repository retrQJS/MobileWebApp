<html>
	<head>
		<link rel="stylesheet" href="./css/styles.css"/>
		<link rel="stylesheet" href="./css/styles2.css"/>
	</head>
	<body>
		<?php include "banner.php";?>
		<?php include "menu.php" ?>
		<?php include "db_connection.php";?>
		<center>
            <h1 id="top-header2">Check Out A Book.</h1>
            <form  name="login-form" method="POST" action="lending_process.php" >
                Book ID: <input class="textbox" name="bookid" /><br>
                User ID: <input class="textbox" name="userid" /><br>
                Date of Lend:<input class="textbox" name="dol" placeholder="YYYY-MM-DD"/><br>
                Date of Return: <input class="textbox" name="dor" placeholder="YYYY-MM-DD"/><br>
                Status:<input class="textbox" name="status" /><br>
                Remarks:<textarea name="remarks" ></textarea><br>

                <input id="button" type="submit" value="Add Book"/>
            </form>
        </center>
	</body>
</html>

