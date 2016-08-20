<?php

require_once'db.php';

$id = $_GET['id'];
try {
	$stmt_del = $dbConn->prepare("DELETE FROM tbl_items WHERE ITEMS=?");
	$stmt_del->execute(array($id));
	header('Location: index.php');

} catch (Exception $e) {
	$e->getMessage();
}
exit;



 ?>
