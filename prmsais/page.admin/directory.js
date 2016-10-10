var app = angular.module('directoryApp', ['ngRoute'] );

        app.controller('directoryController', function($scope,$http) {

          $scope.type =["Admin", "Receptionist", "Secretary"];

          $scope.go = function ( path ) {
            $location.path( path );
          };



          $scope.getDoctor_tbl = function(){
            $http.get("../php/getDoctor_tbl.php")
            .success(function(data){
              $scope.fields = data;
            });
          }


          $scope.getPatient_rec_tbl = function(){
            $http.get("../php/getPatient_rec_tbl.php")
            .success(function(data){
              $scope.fields = data;
            });
          }


          $scope.getPatient_tbl = function(){
            $http.get("../php/getPatient_tbl.php")
            .success(function(data){
              $scope.fields = data;
            });
          }

          $scope.getMedicine_tbl = function(){
            $http.get("../php/getMedicine_tbl.php")
            .success(function(data){
              $scope.fields = data;
            });
          }

          $scope.getUser_tbl = function(){
            $http.get("../php/getUser_tbl.php")
            .success(function(data){
              $scope.fields = data;
            });
          }


          $scope.user_add={}
          $scope.addUser_tbl = function(){
            $http.post("../php/addUser_tbl.php" , $scope.user_add)
            .success(function(data, status, headers, config){
              $scope.msg=data;
              $scope.getUser_tbl();

              $scope.user_add.id = ""
              $scope.user_add.pw = ""
              $scope.user_add.type = ""
            });
          }

          $scope.doctor_add={}
          $scope.addDoctor_tbl = function(){
            $http.post("../php/addDoctor_tbl.php" , $scope.doctor_add)
            .success(function(data, status, headers, config){
              $scope.msg=data;
              $scope.getDoctor_tbl();

              $scope.doctor_add.id = ""
              $scope.doctor_add.name = ""
              $scope.doctor_add.medical_title = ""
            });
          }


          $scope.uctt = function(id,pw,type){
            //ng-model = name passing through the function
            $scope.user_update.id = id;
            $scope.user_update.pw = pw;
            $scope.user_update.type = type;

            $scope.user_delete.id = id;
            $scope.user_delete.pw = pw;
            $scope.user_delete.type = type;
          }


          $scope.dctt = function(id,name,medical_title){
            //ng-model = name passing through the function
            $scope.doctor_update.id = id;
            $scope.doctor_update.name = name;
            $scope.doctor_update.medical_title = medical_title;

            $scope.doctor_delete.id = id;
            $scope.doctor_delete.name = name;
            $scope.doctor_delete.medical_title = medical_title;
          }

          $scope.doctor_update={}
          $scope.updateDoctor_tbl = function(){
            $http.post("../php/updateDoctor_tbl.php" , $scope.doctor_update)
            .success(function(data, status, headers, config){
              $scope.msg=data;
              $scope.getDoctor_tbl();
            });
          }

          $scope.doctor_delete={}
          $scope.deleteDoctor_tbl = function(){
            $http.post("../php/deleteDoctor_tbl.php" , $scope.doctor_delete)
            .success(function(data, status, headers, config){
              $scope.msg=data;
              $scope.getDoctor_tbl();
            });
          }

          $scope.user_update={}
          $scope.updateUser_tbl = function(){
            $http.post("../php/updateUser_tbl.php" , $scope.user_update)
            .success(function(data, status, headers, config){
              $scope.msg=data;
              $scope.getUser_tbl();
            });
          }


          $scope.user_delete={}
          $scope.deleteUser_tbl = function(){
            $http.post("../php/deleteUser_tbl.php" , $scope.user_delete)
            .success(function(data, status, headers, config){
              $scope.msg=data;
              $scope.getUser_tbl();
            });
          }






          $scope.pw = {};
          $scope.changePassword = function(){
            $http.post("../php/changePassword.php" ,$scope.pw)
            .success(function(data, status, headers, config){
              $scope.pw.user = "";

            });
          }



        });//end of controller



        app.config(function ($routeProvider) {
          $routeProvider



          .when('/',
          {
            templateUrl: 'viewPatient.php'
          })

          .when('/viewPatientRecords',
          {
            templateUrl: 'viewPatientRecords.php'
          })

          .when('/organizeUser',
          {
            templateUrl: 'organizeUser.php'
          })

          .when('/organizeDoctor',
          {
            templateUrl: 'organizeDoctor.php'
          })

          .when('/viewMedicine',
          {
            templateUrl: 'viewMedicine.php'
          })

          .when('/addUser',
          {
            templateUrl: 'addUser.php'
          })

          .when('/updateUser',
          {
            templateUrl: 'updateUser.php'
          })

          .when('/deleteUser',
          {
            templateUrl: 'deleteUser.php'
          })

          .when('/addDoctor',
          {
            templateUrl: 'addDoctor.php'
          })

          .when('/updateDoctor',
          {
            templateUrl: 'updateDoctor.php'
          })

          .when('/deleteDoctor',
          {
            templateUrl: 'deleteDoctor.php'
          })


          .when('/changePassword',
          {
            templateUrl: 'changePassword.php'
          })


          .otherwise({
            redirectTo: '/'
          });


        });
