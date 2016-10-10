<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<!--- /////////////////////// VIEW DOCTORS //////////////////////////////////--->
      <div class="row" ng-init="getDoctor_tbl()">

        <div class="row">
          <div class="col s6"><h4>View Doctors</h4></div>
          <div class="col s4 offset-s2 input-field">
            <label for="search_doctor"><i class="fa fa-search" ></i>   Search</label>
            <input type="text"  id="search_doctor" ng-model="search_doctor">
          </div>
        </div>

        <div class="col s12">

          <table class="striped responsive-table centered" >
            <thead>
              <tr>
                <th>Doctor ID</th>
                <th>Name</th>
                <th>Medical Title</th>
              </tr>
            </thead>

            <tbody>
              <tr ng-repeat="doctor in fields | filter:search_doctor">
                <td>{{doctor.id}}</td>
                <td>{{doctor.name}}</td>
                <td>{{doctor.medical_title}}</td>
              </tr>
            </tbody>
          </table>

        </div><!-- end of col -->
      </div><!-- end of row -->
