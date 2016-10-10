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


        <div class="row">
          <div class="col s8">
            <h4>Activity Log:</h4>


              <div class="chip" style="width:100% !important; height:auto !important;">
              <span>
                {{msg}}
                <i class="close fa fa-times-circle"></i>
              </span>
              </div>

          </div><!--end of col-->

          <div class="col s4"><br><br>
            <a class="btn waves-effect right blue darken-1" href="#/addDoctor">Add</a>
          </div>
        </div><!-- end of row -->


        <div class="col s12">

          <table class="striped responsive-table centered" >
            <thead>
              <tr>
                <th>Doctor ID</th>
                <th>Name</th>
                <th>Medical Title</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>

            <tbody>
              <tr ng-repeat="doctor in fields | filter:search_doctor">
                <td>{{doctor.id}}</td>
                <td>{{doctor.name}}</td>
                <td>{{doctor.medical_title}}</td>

                <td>
                <li ng-click="dctt(doctor.id, doctor.name, doctor.medical_title)">
                  <a href="#/updateDoctor" class="btn waves-effect blue darken-1">Update</a>
                </li>
                </td>

                <td>
                <li ng-click="dctt(doctor.id, doctor.name, doctor.medical_title)">
                  <a href="#/deleteDoctor" class="btn waves-effect blue darken-1">Delete</a>
                </li>
                </td>


              </tr>
            </tbody>
          </table>

        </div><!-- end of col -->
      </div><!-- end of row -->



      <script src="../materialize/js/jquery.min.js"></script>
      <script src="../materialize/js/jquery.validate.min.js"></script>
      <script src="../materialize/js/materialize.min.js"></script>
      <script src="../materialize/js/materialize.jquery.js"></script>
