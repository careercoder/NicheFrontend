var app = angular.module("NicheIncomeGuide", ["ngRoute"]);

/*
 Setup Core Scopes for APP to work.
 */
app.run(function ($rootScope) {

    $rootScope.user = {}
    $rootScope.user.first_name = 'Jody';
    $rootScope.user.last_name = 'Fitzpatrick';
    $rootScope.user.email = 'jody.lee.fitzpatrick@outlook.com';
    $rootScope.user.id = '4d8a-ca-8dcjadj-9823';


    /** the active niche
     $rootScope.niche =   {}
     $rootScope.niche.name  = ''
     */
});


/** Controllers *


app.controller('NicheList', ['$scope', '$log', function ($scope, $rootScope) {
    $scope.launch = getNicheList();
    $rootScope.app_title = 'List of Niches';
    $rootScope.meta_title = 'Niche List | Dashboard | NicheIncomeGuide.com'
}]);*/

app.controller('NicheCreate', ['$scope', '$log', function ($scope, $rootScope) {
    $scope.launch = getNicheList();
    $rootScope.app_title = 'Create New Niche (Website)';

}]);

app.controller('NicheAnalyzer', ['$scope', '$log', function ($scope, $rootScope) {
    // $scope.launch = getNicheList();
    $rootScope.app_title = 'Analyze Niche';

}]);


/** end controllers */


/** Niche Switch Detection */
app.controller("ActiveNicheSelectionTool", ['$scope', '$log', function ($scope, $log) {
    $scope.options = {};

    $scope.$watch("active_niche", function () {
        alert('changed');
        $scope.active_niche = $scope.active_niche.name;
        $log.log($scope.active_niche.name);
    })


}]);

app.controller('ActiveNicheController', ['$scope', function ($scope) {
    $scope.counter = 0;
    $scope.change = function () {
        //$scope.active_niche.name = 'bob';
    }
}]);