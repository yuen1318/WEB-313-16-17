<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<div class="row">
  <div class="col s6">


    <div class="input-field">
      <label for="m_add.batch_no">Batch No.</label>
      <input type="number" ng-model="m_add.batch_no" id="m_add.batch_no">
    </div>

    <div class="input-field">
      <label for="m_add.brand_name">Brand Name</label>
      <input type="text"  ng-model="m_add.brand_name" id="m_add.brand_name">
    </div>

    <div class="input-field">
      <label for="m_add.manufacturer">Manufacturer</label>
      <input type="text"  ng-model="m_add.manufacturer" id="m_add.manufacturer">
    </div>

    <div class="input-field">
      <label for="m_add.preparation">Preparation</label>
      <input type="text"  ng-model="m_add.preparation" id="m_add.preparation">
    </div>

    <div class="input-field">
      <label for="m_add.classification">Classification</label>
      <input type="text"  ng-model="m_add.classification" id="m_add.classification">
    </div>

    <div class="input-field">
      <label for="m_add.dosage">Dosage</label>
      <input type="number"  ng-model="m_add.dosage" id="m_add.dosage">
    </div>

    <div class="input-field">
      <label for="m_add.unit">Unit</label>
      <input type="text"  ng-model="m_add.unit" id="m_add.unit">
    </div>

    <div>
      <label for="ed">Expiry Date</label>
      <input type="date"   ng-model="m_add.expiry_date" id="ed">
    </div>

    <div class="input-field">
      <label for="m_add.quantity">Quantity</label>
      <input type="number"  ng-model="m_add.quantity" id="m_add.quantity">
    </div>

  </div><!-- end of col -->


  <div class="col s6">
      <button data-target="modal_med_add" class="btn modal-trigger">Add</button>
  </div>
</div><!-- end of row -->


<div id="modal_med_add" class="modal">
  <div class="modal-content">
    <h4>Confirmation</h4>
    <p>Are you sure you want to add this data?</p>
  </div>
  <div class="modal-footer">
    <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/organizeMedicine" ng-click="addMedicine_tbl()">Yes</a>
    <button type="button" class="btn waves-effect modal-action modal-close" style="margin-right:10px;">No</button>
  </div>
</div>




<script src="../materialize/js/jquery.min.js"></script>
<script src="../materialize/js/jquery.validate.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/materialize.jquery.js"></script>
