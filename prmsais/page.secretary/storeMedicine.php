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
      <input type="text" ng-model="m_store.batch_no" readonly>
    </div>

    <div>
      <label>Quantity</label>
      <input type="text"  ng-model="m_store.quantity" readonly>
    </div>

    <div class="input-field">
      <label>Store</label>
      <input type="number"  ng-model="m_store.store">
    </div>

  </div><!-- end of col -->


  <div>
      <button data-target="modal_med_store" class="btn modal-trigger right">Store</button>
  </div>
</div><!-- end of row -->


<div id="modal_med_store" class="modal">
  <div class="modal-content">
    <h4>Confirmation</h4>
    <p>Are you sure you want to edit this data?</p>
  </div>
  <div class="modal-footer">
    <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/organizeMedicine" ng-click="storeMedicine_tbl()">Yes</a>
    <button type="button" class="btn waves-effect modal-action modal-close" style="margin-right:10px;">No</button>
  </div>
</div>




<script src="../materialize/js/jquery.min.js"></script>
<script src="../materialize/js/jquery.validate.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/materialize.jquery.js"></script>
