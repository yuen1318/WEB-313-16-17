<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<!-- ////////////////////////////// View Patient /////////////////////////////////// -->

<div class="row">
  <div class="col s8"><h4>View Patient</h4></div>
  <div class="col s4 input-field">
  <label for="search_patient"><i class="fa fa-search" ></i>   Search</label>
  <input type="text"  id="search_patient" ng-model="search_patient">
  </div><!--end of col-->
</div><!-- end of row -->


<div class="row" ng-init="getPatient_tbl()" >
  <div class="col s12">

    <table class="striped responsive-table centered" >
      <thead>
        <tr>
          <th>Patient ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Mobile</th>
        </tr>
      </thead>

      <tbody>
        <tr ng-repeat="patient in fields  | filter:search_patient">
          <td>{{patient.id}}</td>
          <td>{{patient.name}}</td>
          <td>{{patient.address}}</td>
          <td>{{patient.mobile}}</td>
        </tr>
      </tbody>
    </table>
    <!-- Modal Structure -->

  </div><!-- end of col -->
</div><!-- end of row -->
