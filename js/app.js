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

app.controller('getOnePicture', function($scope, $http) {
    $scope.init = function(id)
    {
      //This function is sort of private constructor for controller
      $scope.id = id;
      //Based on passed argument you can make a call to resource
      //$resource.getMeBond(007)
    };
    var reqURL = "http://localhost/Phowo_new/api/picture/read_one.php?id="+$scope.id;
  $http({
    method : "GET",
    url : reqURL
  }).then(function mySuccess(response) {
      $scope.onePicture = response.data;
    }, function myError(response) {
      $scope.onePicture = response.statusText;
  });
});