var fetch = angular.module('fetch', []);
      fetch.controller('dbCtrl', function ($scope, $http) { 
          getItem();
          function getItem(){
            $http.post("../php/select.php").success(function(data){
                $scope.data = data;
                console.log($scope.data);
                alert($scope.data);

            })
          .error(function() {
            $scope.data = "error in fetching dat";
            });
          };


          $scope.mostrarPerfil = function(perfil){
              $scope.temaPerfil=perfil;
          }                   
      });      


      