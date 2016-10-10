<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
 
<div class="row">
 <div class="col s12">

   <div class="input-field">
     <label for="user_id"><i class="fa fa-user-plus" ></i>   User ID</label>
     <input type="text"  id="user_id" ng-model="user_add.id">
   </div>

   <div class="input-field">
     <label for="pw"><i class="fa fa-map-marker" ></i>   Password</label>
     <input type="text"  id="pw" ng-model="user_add.pw">
   </div>


   <div class="input-field">
     <label for="type"><i class="fa fa-map-marker" ></i>   Accessability</label>
     <input type="text"  id="type" ng-model="user_add.type">
   </div>

   <div>
     <button data-target="modal_add_user" class="btn modal-trigger">Add</button>
   </div>

 </div><!-- end of col -->



</div><!-- end of row -->





<!-- Modal Structure -->
<div id="modal_add_user" class="modal">
 <div class="modal-content">
   <h4>Confirmation</h4>
   <p>Are you sure you want to add this data?</p>
 </div>
 <div class="modal-footer">
   <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/organizeUser" ng-click="addUser_tbl()">Yes</a>
   <button type="button" class="btn waves-effect modal-action modal-close" style="margin-right:10px;">Close</button>
 </div>
</div>


<script src="../materialize/js/jquery.min.js"></script>
<script src="../materialize/js/jquery.validate.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/materialize.jquery.js"></script>
