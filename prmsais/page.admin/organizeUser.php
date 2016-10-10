<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
 
<!-- ////////////////////////////// View Patient /////////////////////////////////// -->

<div class="row">
  <div class="col s8"><h4>View User</h4></div>
  <div class="col s4 input-field">
  <label for="search_patient"><i class="fa fa-search" ></i>   Search</label>
  <input type="text"  id="search_patient" ng-model="search_user">
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
    <a class="btn waves-effect right blue darken-1" href="#/addUser">Add</a>
  </div>
</div><!-- end of row -->

<div class="row" ng-init="getUser_tbl()" >
  <div class="col s12">

    <table class="striped responsive-table centered" >
      <thead>
        <tr>
          <th>User ID</th>
          <th>Password</th>
          <th>Accessability</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>

      <tbody>
        <tr ng-repeat="user in fields  | filter:search_user">
          <td>{{user.id}}</td>
          <td>{{user.pw}}</td>
          <td>{{user.type}}</td>

          <td>
          <li ng-click="uctt(user.id, user.pw, user.type)">
            <a href="#/updateUser" class="btn waves-effect blue darken-1">Update</a>
          </li>
          </td>

          <td>
          <li ng-click="uctt(user.id, user.pw, user.type)">
            <a href="#/deleteUser" class="btn waves-effect blue darken-1">Delete</a>
          </li>
          </td>


        </tr>
      </tbody>
    </table>
    <!-- Modal Structure -->

  </div><!-- end of col -->
</div><!-- end of row -->


<script src="../materialize/js/jquery.min.js"></script>
<script src="../materialize/js/jquery.validate.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../materialize/js/materialize.jquery.js"></script>
