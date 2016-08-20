<?php
require_once 'db.php';
require_once 'function.php';

$txt_des =cin_str($_POST['add_des']);
$txt_price=cin_float($_POST['add_price']);
//when btn_ma_submit is click
if (isset($_POST['btn_ma_submit'])) {
  //if the textbox are not empty
  if (!empty($txt_des) AND !empty($txt_price)) {

      try {

              $stmt_add = $dbConn->prepare("INSERT INTO tbl_items(DES,PRICE) VALUES(:des,:price)");
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
