<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
 
<!--- /////////////////////// ORGANIZE MEDICINE //////////////////////////////////--->
          <div class="row" ng-init="getMedicine_tbl()">

            <div class="row">
              <div class="col s8"><h4>Organize Medicines</h4></div>
              <div class="col s4 input-field">
              <label for="search_patient"><i class="fa fa-search" ></i>   Search</label>
              <input type="text"  id="search_patient" ng-model="search_patient">
              </div><!--end of col-->
            </div><!-- end of row -->



          <div class="row">
            <div class="col s12">

              <table class="striped responsive-table centered" >
                <thead>
                  <tr>
                    <th>Batch No.</th>
                    <th>Brand Name</th>
                    <th>Manufacturer</th>
                    <th>Preparation</th>
                    <th>Classification</th>
                    <th>Dosage</th>
                    <th>Unit</th>
                    <th>Expiry Date</th>
                    <th>Quantity</th>
                  </tr>
                </thead>

                <tbody>
                  <tr ng-repeat="medicine in fields  | filter:search_patient">
                    <td>{{medicine.batch_no}}</td>
                    <td>{{medicine.brand_name}}</td>
                    <td>{{medicine.manufacturer}}</td>
                    <td>{{medicine.preparation}}</td>
                    <td>{{medicine.classification}}</td>
                    <td>{{medicine.dosage}}</td>
                    <td>{{medicine.unit}}</td>
                    <td>{{medicine.expiry_date | date:'mediumDate'}}</td>
                    <td>{{medicine.quantity}}</td>
                  </tr>
                </tbody>
              </table>


            </div><!-- end of col -->
          </div><!-- end of row -->

        </div><!-- end of row -->




        <script src="../materialize/js/jquery.min.js"></script>
        <script src="../materialize/js/jquery.validate.min.js"></script>
        <script src="../materialize/js/materialize.min.js"></script>
        <script src="../materialize/js/materialize.jquery.js"></script>
