var app = angular.module('directoryApp', ['ngRoute'] );

        app.controller('directoryController', function($scope,$http) {


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



          $scope.p_add = {};
          $scope.addPatient_tbl = function(){
            $http.post("../php/addPatient_tbl.php" , $scope.p_add)
            .success(function(data, status, headers, config){

              $scope.getPatient_tbl();
              $scope.msg =data ;
              $scope.p_add.name = "";
              $scope.p_add.add = "";
              $scope.p_add.mobile = "";
            });
          }



          $scope.ctt = function(id,name,address,mobile){
            //ng-model = name passing through the function
            $scope.p_update.id = id;
            $scope.p_update.name = name;
            $scope.p_update.add = address;
            $scope.p_update.mobile = mobile;

            $scope.p_delete.id = id;
            $scope.p_delete.name = name;
            $scope.p_delete.add = address;
            $scope.p_delete.mobile = mobile;
          }


          $scope.p_update = {};
          $scope.updatePatient_tbl = function(){
            $http.post("../php/updatePatient_tbl.php" ,$scope.p_update)
            .success(function(data, status, headers, config){
              $scope.getPatient_tbl();
              $scope.msg =data ;

            });
          }

          $scope.p_delete = {};
          $scope.deletePatient_tbl = function(){
            $http.post("../php/deletePatient_tbl.php" ,$scope.p_delete)
            .success(function(data, status, headers, config){
              $scope.getPatient_tbl();
              $scope.msg =data ;
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
            templateUrl: 'viewDoctors.php'
          })

          .when('/viewPatientRecords',
          {
            templateUrl: 'viewPatientRecords.php'
          })

          .when('/organizePatient',
          {
            templateUrl: 'organizePatient.php'
          })

          .when('/addPatient',
          {
            templateUrl: 'addPatient.php'
          })

          .when('/updatePatient',
          {
            templateUrl: 'updatePatient.php'
          })

          .when('/deletePatient',
          {
            templateUrl: 'deletePatient.php'
          })

          .when('/changePassword',
          {
            templateUrl: 'changePassword.php'
          })


          .otherwise({
            redirectTo: '/'
          });


        });
