var app = angular.module('myApp', [])
app.controller('myCtrl', function($scope) 
{
    $scope.count = 0;
    $scope.total = 0;
    $scope.addToCart = function(amt)
    {
        this.count = $scope.total += amt;                
    }
    $scope.deleteCart = function(){
        this.count = parseInt($scope.count)-1;	
    }
});
 