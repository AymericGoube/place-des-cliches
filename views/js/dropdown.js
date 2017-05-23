var app =angular.module('myApp', []);


app.controller('dropCtrl', function($scope){
    $scope.IsVisible = false;
    $scope.ShowHide = function () {
//If DIV is visible it will be hidden and vice versa.
    $scope.IsVisible = $scope.IsVisible ? false : true;
};
})
