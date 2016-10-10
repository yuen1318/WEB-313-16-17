<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<div class="row">
  <div class="col s12">


    <div>
      <label>Batch No.</label>
      <input type="text" ng-model="m_delete.batch_no" readonly>
    </div>

    <div>
      <label>Brand Name</label>
      <input type="text"  ng-model="m_delete.brand_name" readonly>
    </div>

    <div>
      <label>Manufacturer</label>
      <input type="text"  ng-model="m_delete.manufacturer" readonly>
    </div>

    <div>
      <label>Preparation</label>
      <input type="text"  ng-model="m_delete.preparation" readonly>
    </div>

    <div>
      <label>Classification</label>
      <input type="text"  ng-model="m_delete.classification" readonly>
    </div>

    <div>
      <label>Dosage</label>
      <input type="text"  ng-model="m_delete.dosage" readonly>
    </div>

    <div>
      <label>Unit</label>
      <input type="text"  ng-model="m_delete.unit" readonly>
    </div>

    <div>
      <label>Expiry Date</label>
      <input type="text"  ng-model="m_delete.expiry_date" readonly>
    </div>

    <div>
      <label>Quantity</label>
      <input type="text"  ng-model="m_delete.quantity" readonly>
    </div>

  </div><!-- end of col -->


  <div>
      <button data-target="modal_med_delete" class="btn modal-trigger right">Delete</button>
  </div>
</div><!-- end of row -->


<div id="modal_med_delete" class="modal">
  <div class="modal-content">
    <h4>Confirmation</h4>
    <p>Are you sure you want to delete this data?</p>
  </div>
  <div class="modal-footer">
    <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/organizeMedicine" ng-click="deleteMedicine_tbl()">Yes</a>
    <button type="button" class="btn waves-effect modal-action modal-close" style="margin-right:10px;">No</button>
  </div>
</div>




<script src="../materialize/js/jquery.min.js"></script>
<script src="../materialize/js/jquery.validate.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/materialize.jquery.js"></script>
