(function() {
  var app = angular.module('store', ['store-products']);

  app.controller('StoreController', [ '$http',function($http){
    var store = this;

    store.products = [];

    $http.get('index.php/api/v1/products').success(function(data) {
      var products = data;

      for (var i = 0; i < products.length; i++) {
        products[i].reviews = [];
        var id = products[i].id;
        var url = 'index.php/api/v1/products/' + id + '/reviews';

        $http.get(url).success(function(reviewsData) {
          store.products.push(reviewsData);
        });
      }
    });

  }]);

  app.controller('ReviewController', [ '$http', function ($http) {
    this.review = {};

    this.addReview = function(product) {
      this.review.productId = product.id;
      product.reviews.push(this.review);

      $http.post('index.php/api/v1/reviews', this.review).success(function($msg) {
        console.log($msg);
      });

      this.review = {};
    };
  }]);

})();
