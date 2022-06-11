<?php
session_start();

require_once('dbhelper.php');

if(!empty($_POST)) {
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "select * from account where email = '$email' and password = '$pwd'";
	$user = executeResult($sql, true);

	if($user != null) {
		$_SESSION['cUser'] = $user;
		
		header('Location: product.php');
		die();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    	.form-group{
    		margin-bottom: 20px;
    	}
    	.container {
    		text-align: center;
    		width: 600px;
    	}
    </style>
</head>
<body>
<div class="container">
<div class="card">
	<div class="card-header bg-info">
		<h1>Login</h1>
	</div>
	<div class="card-body">
		<form method="post" class="form">
    		<div class="form-group">
				<input required type="email" name="email" class="form-control" placeholder="Email">
    		</div>
    		<div class="form-group">
				<input required type="password" name="pwd" class="form-control" placeholder="Password">
    		</div>
    		<div class="form-group">
				<button class="btn btn-success">Sumbit</button>
				<button class="btn btn-warning" type="reset">Reset</button>
    		</div>
 		</form>
	</div>
</div>
</div>
</body>
</html>