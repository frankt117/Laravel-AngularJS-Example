(function() {
  var app = angular.module('store', ['store-products']);

  app.controller('StoreController', [ '$http',function($http){
    var store = this;

    store.products = [];

    $http.get('/products.json').success(function(data) {
      console.log(data);
      store.products = data.products;
    });

  }]);

  app.controller('ReviewController', function () {
    this.review = {};

    this.addReview = function(product) {
      product.reviews.push(this.review);
      this.review = {};
    };
  });

})();
