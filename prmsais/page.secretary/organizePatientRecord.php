<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
<!--- /////////////////////// ORGANIZE PATIENT //////////////////////////////////--->
          <div class="row" ng-init="getPatient_rec_tbl()">

            <div class="row">
              <div class="col s8"><h4>Organize Patient Records</h4></div>
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
                <a   class="btn waves-effect right blue darken-1" href="#/addPatientRecord">Add</a>

              </div>
            </div><!-- end of row -->


          <div class="row">
            <div class="col s12">

              <table class="striped responsive-table centered" >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Patient ID</th>
                    <th>Name</th>
                    <th>Disease</th>
                    <th>Medicine</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th colspan="2">Action</th>

                  </tr>
                </thead>

                <tbody>
                  <tr ng-repeat="patient_rec in fields  | filter:search_patient">
                    <td>{{patient_rec.id}}</td>
                    <td>{{patient_rec.pid}}</td>
                    <td>{{patient_rec.name}}</td>
                    <td>{{patient_rec.disease}}</td>
                    <td>{{patient_rec.medicine}}</td>
                    <td>{{patient_rec.date  | date:'mediumDate'}}</td>
                    <td>{{patient_rec.doctor_id}}</td>

                    <td>
                    <li ng-click="prctt(patient_rec.id, patient_rec.pid, patient_rec.name, patient_rec.disease, patient_rec.medicine, patient_rec.date, patient_rec.doctor_id)">
                      <a href="#/updatePatientRecord" class="btn waves-effect blue darken-1">Update</a>
                    </li>
                    </td>

                    <td>
                      <li ng-click="prctt(patient_rec.id, patient_rec.pid, patient_rec.name, patient_rec.disease, patient_rec.medicine, patient_rec.date, patient_rec.doctor_id)">
                        <a href="#/deletePatientRecord" class="btn waves-effect blue darken-1">Delete</a>
                      </li>
                    </td>

                  </tr>
                </tbody>
              </table>
              <!-- Modal Structure -->

            </div><!-- end of col -->
          </div><!-- end of row -->





        </div><!-- end of row -->
