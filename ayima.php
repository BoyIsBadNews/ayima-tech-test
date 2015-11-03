<!DOCTYPE html>
<html data-ng-app="myApp">

<head>
  <meta charset="utf-8" />
  <title>AyimaData</title>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <script>
  	<?php 
$protocol = "HTTP/1.0";
if ( "HTTP/1.1" == $_SERVER["SERVER_PROTOCOL"] )
$protocol = "HTTP/1.1";
header( "$protocol 503 Service Unavailable", true, 503 );
header( "Retry-After: 3600" );  
?>
  </script>
</head>

<body>
  <div data-ng-controller="customersCtrl">
    <ul>
      <li data-ng-repeat="x in ayima">
        <p>{{ x.domain }}</p>
      </li>
    </ul>
  </div>
  <script>
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {
      $http.get("http://dfjb.webcindario.com/dataAyima.php")
        .success(function(response) {
          $scope.ayima = response.marketIntel;
        })
        .error(function(data, status, headers, config) {
          // something went wrong
        });
    });
  </script>
</body>

</html>