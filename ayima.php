<!DOCTYPE html>
<html data-ng-app="myApp">

<head>
  <meta charset="utf-8" />
  <title>AyimaData</title>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <style>
table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
</head>

<body>
  <div data-ng-controller="customersCtrl">
    <ul>
      <li data-ng-repeat="x in ayima">
        <p>{{ x.domain }}</p>
        <table>
  <tr ng-repeat="(key, value) in x.scores">
    <td>{{key}}</td>
    <td>{{value}}</td>
  </tr>
</table>
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