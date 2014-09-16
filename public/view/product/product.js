(function() {
  var app = angular.module('store-products', []);

  app.directive('productTile', function() {
    return {
      restrict: 'E',
      templateUrl: 'product-tile.html'
    }
  });

  app.directive('productPanels', function() {
    return {
      restrict: 'E',
      templateUrl: 'product-panels.html',
      controller: function() {
        this.tab = 1;

        this.selectTab = function(setTab) {
          this.tab = setTab;
        };
        this.isSelected = function(checkTab) {
          return this.tab === checkTab;
        };
      },
      controllerAs: 'panel'
    }
  });

})();