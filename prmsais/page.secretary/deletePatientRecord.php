<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<div class="row">
  <div class="col s12">


    <div>
      <label>ID</label>
      <input type="text" ng-model="pr_delete.id" readonly>
    </div>

    <div>
      <label>Patient ID</label>
      <input type="text"  ng-model="pr_delete.pid" readonly>
    </div>

    <div>
      <label>Name</label>
      <input type="text"  ng-model="pr_delete.name" readonly>
    </div>

    <div>
      <label>Disease</label>
      <input type="text"  ng-model="pr_delete.disease" readonly>
    </div>

    <div>
      <label>Medicine</label>
      <input type="text"  ng-model="pr_delete.medicine" readonly>
    </div>

    <div>
      <label>Date</label>
      <input type="text"  ng-model="pr_delete.date" readonly>
    </div>

    <div>
      <label>Doctor</label>
      <input type="text"  ng-model="pr_delete.doctor_id" readonly>
    </div>

  </div><!-- end of col -->


  <div>
      <button data-target="modal_pr_delete" class="btn modal-trigger right">Delete</button>
  </div>
</div><!-- end of row -->


<div id="modal_pr_delete" class="modal">
  <div class="modal-content">
    <h4>Confirmation</h4>
    <p>Are you sure you want to delete this data?</p>
  </div>
  <div class="modal-footer">
    <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/organizePatientRecord" ng-click="deletePatientRecord_tbl()">Yes</a>
    <button type="button" class="btn waves-effect modal-action modal-close" style="margin-right:10px;">No</button>
  </div>
</div>




<script src="../materialize/js/jquery.min.js"></script>
<script src="../materialize/js/jquery.validate.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/materialize.jquery.js"></script>
