var app = angular.module('phowoApp', ['ngMasonry']);

app.controller('getCategories', function($scope, $http) {
  $http({
    method : "GET",
    url : "http://localhost/Phowo_new/api/category/read.php"
  }).then(function mySuccess(response) {
      $scope.myCategories = response.data.records;
    }, function myError(response) {
      $scope.myCategories = response.statusText;
  });
});

app.controller('getAllPictures', function($scope, $http) {
  $http({
    method : "GET",
    url : "http://localhost/Phowo_new/api/picture/read.php"
  }).then(function mySuccess(response) {
      $scope.myPictures = response.data.records;
    }, function myError(response) {
      $scope.myPictures = response.statusText;
  });
});