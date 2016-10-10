<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<!--- /////////////////////// ORGANIZE PATIENT //////////////////////////////////--->
          <div class="row" ng-init="getPatient_tbl()">

            <div class="row">
              <div class="col s8"><h4>Organize Patient</h4></div>
              <div class="col s4 input-field">
              <label for="search_patient"><i class="fa fa-search" ></i>   Search</label>
              <input type="text"  id="search_patient" ng-model="search_patient">
              </div><!--end of col-->
            </div><!-- end of row -->

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
                <a   class="btn waves-effect right blue darken-1" href="#/addPatient">Add</a>

              </div>
            </div><!-- end of row -->


          <div class="row">
            <div class="col s12">

              <table class="striped responsive-table centered" >
                <thead>
                  <tr>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th colspan="2">Action</th>

                  </tr>
                </thead>

                <tbody>
                  <tr ng-repeat="patient in fields  | filter:search_patient">
                    <td>{{patient.id}}</td>
                    <td>{{patient.name}}</td>
                    <td>{{patient.address}}</td>
                    <td>{{patient.mobile}}</td>

                    <td>
                    <li ng-click="ctt(patient.id, patient.name, patient.address, patient.mobile)">
                      <a href="#/updatePatient" class="btn waves-effect blue darken-1">Update</a>
                    </li>
                    </td>

                    <td>
                      <li ng-click="ctt(patient.id, patient.name, patient.address, patient.mobile)">
                        <a href="#/deletePatient" class="btn waves-effect blue darken-1">Delete</a>
                      </li>
                    </td>

                  </tr>
                </tbody>
              </table>
              <!-- Modal Structure -->

            </div><!-- end of col -->
          </div><!-- end of row -->

        </div><!-- end of row -->
