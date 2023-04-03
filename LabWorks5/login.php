<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/styles.css"/>
	</head>
	<script type="text/javascript">
		 var RecaptchaOptions = {
			theme : 'theme_name'
		 };
	</script>
	<body id='login-bod'>
		<div id="holder">
			<h1>JBU Education Management System</h1>
			<form name="login-form" id="login-form" method="POST" action="login_process.php">
				<label class='form-label'>UserID:</label><input name="userid" />
				<label class='form-label'>Password:</label><input type="password" name="password"/>
				Recaptcha: xYz91242Sl<input name="captcha"/>
				<input class="btn btn-primary" id="login-but" type="submit" value="login"/>
			</form>
	</body>
</html>