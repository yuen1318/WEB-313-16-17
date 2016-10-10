<?php
session_start();
if (empty($_SESSION['username']) && empty($_SESSION['password']) ) {
  header("Location:../index.php");
}
 ?>
 
<!DOCTYPE html>
<html ng-app="directoryApp">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">
    <link rel="stylesheet" href="../materialize/css/myStyle.css">
  </head>
  <body ng-controller ="directoryController">

    <main>
<!--- /////////////////////// NAVBAR //////////////////////////////////--->
      <div class="navbar-fixed">
        <nav class="navbar-wrapper blue-grey darken-3">
          <a href="#" class="brand-logo center">Admin</a>
          <a href="#" data-activates="show-sidenav" class="button-collapse waves-effect"><i class="fa fa-bars" style="margin-left:10px;"></i></a>
        </nav><!-- end of navbar-wrapper -->
      </div><!-- end of navbar-fixed-->

<!--- /////////////////////// SIDE NAV //////////////////////////////////--->
      <ul class="side-nav fixed blue-grey darken-3" id="show-sidenav" >

        <li>
          <div class="userView">
            <img class="background img-responsive" width="300px" height="auto" src="img/1.jpg">
            <a href="#/"><img class="materialboxed circle responsive-img" src="img/2.jpg"></a>
            <a href="#/"><span class="name">Yuen Y. Yalung</span></a>
            <a href="#/"><span class="email">yuen.yalung@gmail.com</span></a>
          </div>
        </li>

        <li><a class="subheader">Database</a></li>
        <li><a href="#/" class="waves-effect"><i class="fa fa-database"  ></i>View Patient</a></li>
        <li><a href="#/viewPatientRecords"  class="waves-effect"><i class="fa fa-database"></i>View Patient Records</a></li>
        <li><a href="#/viewMedicine"  class="waves-effect"><i class="fa fa-database"></i>View Medicines</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Actions</a></li>
        <li><a href="#/organizeUser" class="waves-effect"><i class="fa fa-plus-square"></i>Organize Users</a></li>
        <li><a href="#/organizeDoctor" class="waves-effect"><i class="fa fa-medkit"></i>Organize Doctors</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Account</a></li>
        <li><a href="#/changePassword"  class="waves-effect"><i class="fa fa-gear"></i>Change Password</a></li>
        <li><a href="logout.php"  class="waves-effect"><i class="fa fa-power-off"></i>Logout</a></li>

      </ul><!-- end of side-nav -->



      <div class="ng-view"> </div><!-- where the routing happens-->




    </main>



    <script src="../materialize/js/jquery.min.js"></script>
    <script src="../materialize/js/jquery.validate.min.js"></script>
    <script src="../materialize/js/materialize.min.js"></script>
    <script src="../materialize/js/materialize.jquery.js"></script>


    <script src="../angularjs/angular.min.js"></script>
    <script src="../angularjs/angular-route.min.js"></script>
    <script src="directory.js"></script>



  </body>
</html>
