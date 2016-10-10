<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
 
<div class="row">
 <div class="col s12">

   <div class="input-field">
     <label for="doctor_id"><i class="fa fa-user-plus" ></i>   Doctor ID</label>
     <input type="text"  id="doctor_id" ng-model="doctor_add.id">
   </div>

   <div class="input-field">
     <label for="name"><i class="fa fa-map-marker" ></i>   Name</label>
     <input type="text"  id="name" ng-model="doctor_add.name">
   </div>


   <div class="input-field">
     <label for="med_title"><i class="fa fa-map-marker" ></i>   Medical Title</label>
     <input type="text"  id="med_title" ng-model="doctor_add.medical_title">
   </div>

   <div>
     <button data-target="modal_add_doctor" class="btn modal-trigger">Add</button>
   </div>

 </div><!-- end of col -->



</div><!-- end of row -->





<!-- Modal Structure -->
<div id="modal_add_doctor" class="modal">
 <div class="modal-content">
   <h4>Confirmation</h4>
   <p>Are you sure you want to add this data?</p>
 </div>
 <div class="modal-footer">
   <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/organizeDoctor" ng-click="addDoctor_tbl()">Yes</a>
   <button type="button" class="btn waves-effect modal-action modal-close" style="margin-right:10px;">Close</button>
 </div>
</div>


<script src="../materialize/js/jquery.min.js"></script>
<script src="../materialize/js/jquery.validate.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/materialize.jquery.js"></script>
