<?php
require 'db.php';


 ?>







<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="data_tables/dataTables.bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">



      <div class="panel panel-success">

        <div class="panel-heading">
          <h4><span class="glyphicon glyphicon-hdd"></span>  Database
            <span style="float:right;">
              <button type="button" id="btn_add" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
            </span>
          </h4>
        </div><!--end of panel heading-->

        <div class="panel-body">

          <div class="row">
            <div class="col-lg-12">
              <table id="table_db" class="table table-striped table-bordered" cellspacing="0" width="100%">

                   <thead>
                     <tr>
                         <th>ITEMS</th>
                         <th>DESCRIPTION</th>
                         <th>PRICE</th>
                         <th>ACTION</th>
                     </tr>
                   </thead>

                   <tbody>
                     <?php
                     foreach ($dbConn->query("SELECT * FROM tbl_items") as $row) {
                    ?>

                     <tr>
                        <td><?=$row['ITEMS']?></td>
                        <td><?=$row['DES']?></td>
                        <td><?=$row['PRICE']?></td>

                        <td style="width:6%"><center>
                          <a href="#" class="btn_update"
                          data-items="<?=$row['ITEMS']?>"
                          data-des="<?=$row['DES']?>"
                          data-price="<?=$row['PRICE']?>">
                            <span class="glyphicon glyphicon-pencil" style="color:orange;"></span>
                          </a>

                          <a href="delete.php? id=<?=$row['ITEMS'];?>">
                            <span class="glyphicon glyphicon-trash" style="color:red;"></span>
                          </a>
                        </center></td>

                    </tr>

                      <?php
                      }
                      ?>
                   </tbody>

                 </table>

            </div><!--end of panel row-->
          </div><!--end of panel row-->
        </div><!--end of panel body-->

      </div><!--end of panel-->


    </div><!--end of container-->

<!-- MODAL ADD-->
<div class="modal fade" id="modal_add" style="margin-top:250px;">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close float-right" data-dismiss="modal">X</button>
       <h4>Add Items</h4>
     </div>

     <form action="add.php" method="post">
       <div class="modal-body">
         <label class="label-control" for="add_des">DESCRIPTION</label>
         <input type="text" id="add_des" class="form-control" name="add_des" required>

         <label class="label-control" for="price">PRICE</label>
         <input type="text" id="add_price" class="form-control" name="add_price" required>
       </div>

       <div class="modal-footer">
         <input type="submit" name="btn_ma_submit" class="btn btn-success">
       </div>
     </form>
   </div>

 </div>
</div><!--end of modal-->



<!-- MODAL UPDATE-->
<div class="modal fade" id="modal_update" style="margin-top:250px;">
 <div class="modal-dialog">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close float-right" data-dismiss="modal">X</button>
       <h4>Add Items</h4>
     </div>

     <form action="update.php" method="post">
       <div class="modal-body">
         <input type="hidden" id="update_items" class="form-control" name="update_items" required>

         <label class="label-control" for="update_des">DESCRIPTION</label>
         <input type="text" id="update_des" class="form-control" name="update_des" required>

         <label class="label-control" for="update_price">PRICE</label>
         <input type="text" id="update_price" class="form-control" name="update_price" required>
       </div>

       <div class="modal-footer">
         <input type="submit" name="btn_mu_submit" class="btn btn-info">
       </div>
     </form>
   </div>

 </div>
</div><!--end of modal-->







  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="data_tables/jquery.dataTables.min.js"></script>
  <script src="data_tables/dataTables.bootstrap.min.js"></script>

  <script type="text/javascript">
  /*run the code inside when the page loads
    regardless wherever the script is (up or down)*/
    $(document).ready(function(){

      //show prepared table
      $('#table_db').DataTable();


      //show modal add
      $('#btn_add').click(function(){
        $('#modal_add').modal('show');
      });


      //show modal update
      $('.btn_update').click(function(){
        var items =$(this).attr('data-items');
        var des =$(this).attr('data-des');
        var price =$(this).attr('data-price');
        $('#update_items').val(items);
        $('#update_des').val(des);
        $('#update_price').val(price);

        $('#modal_update').modal('show');
      });

    });
  </script>

  </body>
</html>
