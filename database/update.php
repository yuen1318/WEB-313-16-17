<?php
require_once 'db.php';
require_once 'function.php';

$txt_items = $_POST['update_items'];
$txt_des = cin_str($_POST['update_des']);
$txt_price= cin_float($_POST['update_price']);

if (isset($_POST['btn_mu_submit'])) {

  if (!empty($txt_des) AND !empty($txt_price)) {

      try {

              $stmt_add = $dbConn->prepare("UPDATE tbl_items SET DES=:des, PRICE=:price WHERE ITEMS=:items");
              $stmt_add->bindParam(':items', $txt_items, PDO::PARAM_INT);
              $stmt_add->bindParam(':des', $txt_des, PDO::PARAM_STR);
              $stmt_add->bindValue(':price', $txt_price);
              $stmt_add->execute();
              header("Location: index.php");
              exit;

      } catch (Exception $e) {
        echo $e->getMessage();
      }

}
}



 ?>
