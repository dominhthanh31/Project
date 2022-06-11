<?php
require_once('dbhelper.php');

$id = $_GET['id'];

$sql = "delete from product where id = $id";
execute($sql);

header('Location: product.php');