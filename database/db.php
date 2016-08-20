<?php

try {
	$dbConn = new PDO('mysql:host=localhost; dbname=db_items; charset=utf8', 'root', 'admin');
	var_dump($dbConn);

} catch (Exception $e) {
	$e->getMessage();
}


 ?>
