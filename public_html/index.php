<!DOCTYPE html>
<!-- LOGIN SCREEN
		if user already logged in, redirect to student/teacher dashboard
-->
<html>
<head>
    <meta charset="utf-8">
    <title>Quest up</title>

    <!-- CSS Our-->
    <link rel="stylesheet" href="css/design.css">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- jQuery and theamJQuery comented-->
    <!--link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>

<body>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<div class="container color" id="login" >
			<h1>Welcome to Learning RPG!</h1>
			<form action="dashboard.php">
				
				
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-envelope"></span>
					<input placeholder="Enter your Email address" class="form-control" name="email" type="text"/>
				</div>
				
				</br>
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-lock"></span>
					<input placeholder="Enter your Password" class="form-control" name="password" type="password"/>
				</div>
				</br>
				<button type="button" class="btn btn-primary btn-lg btn-block login-button">Login</button>
			</form>
			</div>
		</div>
	</div>
    <!-- JS for Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>