<?php
session_start();
require_once('dbhelper.php');

$id = $_GET['id'];

if(!empty($_POST)){
	$title = $_POST['title'];
	$thumbnail = $_POST['thumbnail'];
	$description = $_POST['description'];
	$price = $_POST['price'];

	$sql = "update product set title ='$title', thumbnail = '$thumbnail', description = '$description', price = '$price' where id = '$id'";
	execute ($sql);

	header('Location: product.php');

}

$sql = "select * from product where id = $id";
$product = executeResult($sql, true);

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
			<h1>EDIT LIST</h1>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Title: </label>
				<input required type="text" name="title" class="form-control" value="<?=$product['title']?>">
				<input type="text" name="id" class="form-control" value="<?=$books['id']?>" style="display: none;">
			</div>
			<div class="form-group">
				<label>Thumbail: </label>
				<input required type="text" name="thumbnail" class="form-control" value="<?=$product['thumbnail']?>">
			</div>
			<div class="form-group">
				<label>Description: </label>
				<input required type="text" name="description" class="form-control" value="<?=$product['description']?>">
			</div>
			<div class="form-group">
				<label>Price: </label>
				<input required type="text" name="price" class="form-control" value="<?=$product['price']?>">
			</div>
			<div class="form-group">
				<button class="btn btn-success">Edit</button>
				<button class="btn btn-danger" type="reset">Reset</button>
			</div>
		</div>
	</div>
</form>
</body>
</html>