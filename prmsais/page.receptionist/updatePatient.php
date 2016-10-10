<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<div class="row">
  <div class="col s12">


    <div>
      <label><i class="fa fa-credit-card" ></i>   Patient ID</label>
      <input type="text" ng-model="p_update.id" name="id" readonly>
    </div>

    <div>
      <label><i class="fa fa-user-plus" ></i>   Name</label>
      <input type="text"  ng-model="p_update.name" name="name">
    </div>

    <div>
      <label><i class="fa fa-map-marker" ></i>   Address</label>
      <input type="text"  ng-model="p_update.add" name="add">
    </div>

    <div>
      <label><i class="fa fa-mobile" ></i>   Mobile</label>
      <input type="text"  ng-model="p_update.mobile" name="mobile">
    </div>

    <div>
      <button data-target="modal_update" class="btn modal-trigger">Update</button>
    </div>

  </div><!-- end of col -->



</div><!-- end of row -->


<div id="modal_update" class="modal">
  <div class="modal-content">
    <h4>Confirmation</h4>
    <p>Are you sure you want to edit this data?</p>
  </div>
  <div class="modal-footer">
    <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/organizePatient" ng-click="updatePatient_tbl()">Yes</a>
    <button type="button" class="btn waves-effect modal-action modal-close" style="margin-right:10px;">Close</button>
  </div>
</div>



<script type="text/javascript">
$(document).ready(function(){
  $('.input-field').keypress(function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });
    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    //for collapsible
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    //for dropdown
    $('select').material_select();
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    // Initialize collapse button
     $(".button-collapse").sideNav();
     // Initialize collapsible (uncomment the line below if you use the dropdown variation)
     //$('.collapsible').collapsible();
    $('.tooltipped').tooltip({delay: 50});
 });
</script>
