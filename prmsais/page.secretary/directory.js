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

          $scope.getMedicine_tbl = function(){
            $http.get("../php/getMedicine_tbl.php")
            .success(function(data){
              $scope.fields = data;
            });
          }



          $scope.mctt = function(batch_no, brand_name, manufacturer, preparation, classification, dosage, unit, expiry_date, quantity){
            //ng-model = name passing through the function
            $scope.m_update.batch_no = batch_no;
            $scope.m_update.brand_name = brand_name;
            $scope.m_update.manufacturer = manufacturer;
            $scope.m_update.preparation = preparation;
            $scope.m_update.classification = classification;
            $scope.m_update.dosage = dosage;
            $scope.m_update.unit = unit;
            $scope.m_update.expiry_date = expiry_date;
            $scope.m_update.quantity = quantity;

            $scope.m_delete.batch_no = batch_no;
            $scope.m_delete.brand_name = brand_name;
            $scope.m_delete.manufacturer = manufacturer;
            $scope.m_delete.preparation = preparation;
            $scope.m_delete.classification = classification;
            $scope.m_delete.dosage = dosage;
            $scope.m_delete.unit = unit;
            $scope.m_delete.expiry_date = expiry_date;
            $scope.m_delete.quantity = quantity;
          }


          $scope.smctt = function(batch_no,quantity){
            //ng-model = name passing through the function
            $scope.m_store.batch_no = batch_no;
            $scope.m_store.quantity = quantity;

            $scope.m_get.batch_no = batch_no;
            $scope.m_get.quantity = quantity;

          }

          $scope.m_store = {};
          $scope.storeMedicine_tbl = function(){
            $http.post("../php/storeMedicine_tbl.php" ,$scope.m_store)
            .success(function(data, status, headers, config){
              $scope.getMedicine_tbl();
              $scope.msg =data ;
              $scope.m_store.batch_no = "";
              $scope.m_store.quantity = "";
              $scope.m_store.store = "";
            });
          }

          $scope.m_get = {};
          $scope.getMedQuantity = function(){
            $http.post("../php/getMedQuantity_tbl.php" ,$scope.m_get)
            .success(function(data, status, headers, config){
              $scope.getMedicine_tbl();
              $scope.msg =data ;
              $scope.m_get.batch_no = "";
              $scope.m_get.quantity = "";
              $scope.m_get.store = "";
            });
          }

          $scope.m_update = {};
          $scope.updateMedicine_tbl = function(){
            $http.post("../php/updateMedicine_tbl.php" ,$scope.m_update)
            .success(function(data, status, headers, config){
              $scope.getMedicine_tbl();
              $scope.msg =data ;

            });
          }

          $scope.m_delete = {};
          $scope.deleteMedicine_tbl = function(){
            $http.post("../php/deleteMedicine_tbl.php" ,$scope.m_delete)
            .success(function(data, status, headers, config){
              $scope.getMedicine_tbl();
              $scope.msg =data ;

            });
          }

          $scope.m_add = {};
          $scope.addMedicine_tbl = function(){
            $http.post("../php/addMedicine_tbl.php" ,$scope.m_add)
            .success(function(data, status, headers, config){
              $scope.getMedicine_tbl();
              $scope.msg =data ;

              $scope.m_add.batch_no = "";
              $scope.m_add.brand_name = "";
              $scope.m_add.manufacturer = "";
              $scope.m_add.preparation = "";
              $scope.m_add.classification = "";
              $scope.m_add.dosage = "";
              $scope.m_add.unit = "";
              $scope.m_add.expiry_date = "";
              $scope.m_add.quantity = "";

            });
          }


       $scope.prctt = function(id,pid,name,disease,medicine,date,doctor_id){
            //ng-model = name passing through the function
            $scope.pr_update.id = id;
            $scope.pr_update.pid = pid;
            $scope.pr_update.name = name;
            $scope.pr_update.disease = disease;
            $scope.pr_update.medicine = medicine;
            $scope.pr_update.date = date;
            $scope.pr_update.doctor_id = doctor_id;

            $scope.pr_delete.id = id;
            $scope.pr_delete.pid = pid;
            $scope.pr_delete.name = name;
            $scope.pr_delete.disease = disease;
            $scope.pr_delete.medicine = medicine;
            $scope.pr_delete.date = date;
            $scope.pr_delete.doctor_id = doctor_id;
          }

          $scope.pr_update = {};
          $scope.updatePatientRecord_tbl = function(){
            $http.post("../php/updatePatientRecord_tbl.php" ,$scope.pr_update)
            .success(function(data, status, headers, config){
              $scope.getPatient_rec_tbl();
              $scope.msg =data ;

            });
          }

          $scope.pr_delete = {};
          $scope.deletePatientRecord_tbl = function(){
            $http.post("../php/deletePatientRecord_tbl.php" ,$scope.pr_delete)
            .success(function(data, status, headers, config){
              $scope.getPatient_rec_tbl();
              $scope.msg =data ;
            });
          }

          $scope.pr_add = {};
          $scope.addPatientRecord_tbl = function(){
            $http.post("../php/addPatientRecord_tbl.php" ,$scope.pr_add)
            .success(function(data, status, headers, config){
              $scope.getPatient_rec_tbl();
              $scope.msg =data ;

              $scope.pr_add.id = id;
              $scope.pr_add.pid = pid;
              $scope.pr_add.name = name;
              $scope.pr_add.disease = disease;
              $scope.pr_add.medicine = medicine;
              $scope.pr_add.date = date;
              $scope.pr_add.doctor_id = doctor_id;
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

          .when('/viewPatient',
          {
            templateUrl: 'viewPatient.php'
          })

          .when('/organizePatientRecord',
          {
            templateUrl: 'organizePatientRecord.php'
          })

          .when('/organizeMedicine',
          {
            templateUrl: 'organizeMedicine.php'
          })

          .when('/updateMedicine',
          {
            templateUrl: 'updateMedicine.php'
          })

          .when('/addMedicine',
          {
            templateUrl: 'addMedicine.php'
          })

          .when('/deleteMedicine',
          {
            templateUrl: 'deleteMedicine.php'
          })

          .when('/storeMedicine',
          {
            templateUrl: 'storeMedicine.php'
          })

          .when('/getMedQuantity',
          {
            templateUrl: 'getMedQuantity.php'
          })


          .when('/updatePatientRecord',
          {
            templateUrl: 'updatePatientRecord.php'
          })

          .when('/deletePatientRecord',
          {
            templateUrl: 'deletePatientRecord.php'
          })

          .when('/addPatientRecord',
          {
            templateUrl: 'addPatientRecord.php'
          })

          .when('/changePassword',
          {
            templateUrl: 'changePassword.php'
          })


          .otherwise({
            redirectTo: '/'
          });


        });
