
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
                <a   class="btn waves-effect right blue darken-1" href="#/addMedicine">Add</a>

              </div>
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
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Store</th>
                    <th>Get</th>

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

                    <td>
                    <li ng-click="mctt(medicine.batch_no, medicine.brand_name, medicine.manufacturer, medicine.preparation, medicine.classification, medicine.dosage, medicine.unit, medicine.expiry_date, medicine.quantity)">
                      <a href="#/updateMedicine" class="btn waves-effect blue darken-1">
                      <i class="fa fa-pencil-square-o"></i></a>
                    </li>
                    </td>

                    <td>
                      <li ng-click="mctt(medicine.batch_no, medicine.brand_name, medicine.manufacturer, medicine.preparation, medicine.classification, medicine.dosage, medicine.unit, medicine.expiry_date, medicine.quantity)">
                        <a href="#/deleteMedicine" class="btn waves-effect blue darken-1">
                        <i class="fa fa-trash-o"></i></a>
                      </li>
                    </td>

                    <td>
                      <li ng-click="smctt(medicine.batch_no, medicine.quantity)">
                        <a href="#/storeMedicine" class="btn waves-effect blue darken-1">
                        <i class="fa fa-download"></i></a>
                      </li>
                    </td>

                    <td>
                      <li ng-click="smctt(medicine.batch_no, medicine.quantity)">
                        <a href="#/getMedQuantity" class="btn waves-effect blue darken-1">
                        <i class="fa fa-upload"></i></a>
                      </li>
                    </td>

                  </tr>
                </tbody>
              </table>
              <!-- Modal Structure -->

            </div><!-- end of col -->
          </div><!-- end of row -->

        </div><!-- end of row -->




        <script src="../materialize/js/jquery.min.js"></script>
        <script src="../materialize/js/jquery.validate.min.js"></script>
        <script src="../materialize/js/materialize.min.js"></script>
        <script src="../materialize/js/materialize.jquery.js"></script>
