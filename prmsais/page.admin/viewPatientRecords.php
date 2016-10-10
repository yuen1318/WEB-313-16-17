<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
 
<!--- /////////////////////// VIEW PATIENT RECORDS //////////////////////////////////--->
      <div class="row"  ng-init="getPatient_rec_tbl()">

        <div class="row">
          <div class="col s8"><h4>View Patient Records</h4></div>
          <div class="col s4 input-field">
            <label for="search_patient_rec"><i class="fa fa-search" ></i>   Search</label>
            <input type="text"  id="search_patient_rec" ng-model="search_patient_rec">
          </div>
        </div>

        <div class="col s12">

          <table class="striped responsive-table centered" >
            <thead>
              <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Disease</th>
                <th>Medicine</th>
                <th>Date</th>
                <th>Doctor ID</th>
              </tr>
            </thead>

            <tbody>
              <tr ng-repeat="patient_rec in fields  | filter:search_patient_rec">
                <td>{{patient_rec.pid}}</td>
                <td>{{patient_rec.name}}</td>
                <td>{{patient_rec.disease}}</td>
                <td>{{patient_rec.medicine}}</td>
                <td>{{patient_rec.date  | date:'mediumDate'}}</td>
                <td>{{patient_rec.doctor_id}}</td>
              </tr>
            </tbody>
          </table>

        </div><!-- end of col -->
      </div><!-- end of row -->

      <script src="../materialize/js/jquery.min.js"></script>
      <script src="../materialize/js/jquery.validate.min.js"></script>
      <script src="../materialize/js/materialize.min.js"></script>
      <script src="../materialize/js/materialize.jquery.js"></script>
