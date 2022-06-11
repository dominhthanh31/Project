<?php
session_start();
require_once('dbhelper.php');

if(!empty($_POST)){
	$title = $_POST['title'];
	$thumbnail = $_POST['thumbnail'];
	$description = $_POST['description'];
	$price = $_POST['price'];

	$sql = "insert into product( title, thumbnail, description, price) values('$title', '$thumbnail', '$description', '$price')";
	execute ($sql);

	header('Location: product.php');

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
  	.form-group{
  		margin-bottom: 20px;
  	}
  </style>
</head>
<body>
<form method="post">
	<div class="card">
		<div class="card-header bg-info">
			<h1>ADD LIST</h1>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Title: </label>
				<input required type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Thumbail: </label>
				<input required type="text" name="thumbnail" class="form-control">
			</div>
			<div class="form-group">
				<label>Description: </label>
				<input required type="text" name="description" class="form-control">
			</div>
			<div class="form-group">
				<label>Price: </label>
				<input required type="text" name="price" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-success">ADD</button>
				<button class="btn btn-danger" type="reset">Reset</button>
			</div>
		</div>
	</div>
</form>
</body>
</html>