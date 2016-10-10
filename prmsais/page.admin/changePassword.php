<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<div class="row">
  <div class="col s12">


    <div class="input-field">
      <label for="pw.user"><i class="fa fa-key" ></i>   Password</label>
      <input type="text" ng-model="pw.user" id="pw.user">
    </div>


    <div>
      <button data-target="modal_cp" class="btn modal-trigger">Change Password</button>
    </div>

  </div><!-- end of col -->



</div><!-- end of row -->


<div id="modal_cp" class="modal">
  <div class="modal-content">
    <h4>Confirmation</h4>
    <p>Are you sure you want to change your password?</p>
  </div>
  <div class="modal-footer">
    <a  class="btn waves-effect right blue darken-1 modal-action modal-close"  href="#/changePassword" ng-click="changePassword()">Yes</a>
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
