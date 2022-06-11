<?php
session_start();

require_once('dbhelper.php');

if(!isset($_SESSION['cUser'])){
	header('Location: login.php');
	die();
}

$sql="select * from product";
$productList = executeResult($sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="card">
	<div class="card-header bg-info">
		<h1>Product</h1>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Title</th>
					<th>Thumbnail</th>
					<th>Description</th>
					<th>Price</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
<?php
$index = 0;
foreach ($productList as $item) {
	echo '
	<tr>
					<td>'.(++$index).'</td>
					<td>'.($item['title']).'</td>
					<td>'.($item['thumbnail']).'</td>
					<td>'.($item['description']).'</td>
					<td>'.($item['price']).'</td>
					<td>
					<a href="edit.php?id='.$item['id'].'"><button class="btn btn-success"">Edit</button></a>
			        </td>
			        <td>
			        <a href="delete.php?id='.$item['id'].'"><button class="btn btn-danger">Detele</button></a>
			        </td>
				</tr>
	';
}
?>
			</tbody>
		</table>
	</div>
</div>
<a href="add.php"><button>ADD</button></a>
</body>
</html>