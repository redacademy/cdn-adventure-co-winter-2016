angular.module('BookingApp', ['ui.router'])
.config(function($stateProvider, $urlRouterProvider) {
   $urlRouterProvider.otherwise("/state1");
   $stateProvider
   .state('state1', {
      url: "/season",
      templateUrl: "../wp-content/themes/canadianadventureco/template-parts/season.html"
   }).state('state2', {
      url: "/customize-package",
      templateUrl: "../wp-content/themes/canadianadventureco/template-parts/customize.html"
   }).state('state3', {
      url: "/contact-info",
      templateUrl: "../wp-content/themes/canadianadventureco/template-parts/contact.html"
   });
})


.controller('BookingAppCtrl', BookingAppCtrl);

function BookingAppCtrl($scope, $state) {
   $state.go('state1');
   $scope.package = {
      "season":"",
      "guided":"guided",
      "food":"catered",
      "nights":"3",
      "guests":"1",
      "firstName":"",
      "lastName":"",
      "email":"",
      "phone":"",
      "contactMethod":"email",
      "date":"",
      "comments":""
   };
   $scope.priceGen = function() {
      var guidePrice = function() {
         if ($scope.package.guided==='guided'){
            return 100*$scope.package.nights;
         }else {
            return 0;
         }
      };
      var cateredPrice = function() {
         if ($scope.package.food==='catered'){
            return 100*$scope.package.nights*$scope.package.guests;
         } else {
            return 0;
         }
      };
      var nightPrice = 300*$scope.package.nights;

      return guidePrice()+cateredPrice()+nightPrice;
   };
};
