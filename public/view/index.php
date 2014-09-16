<!DOCTYPE html>
<html ng-app="store">
<head>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
  <script type="text/javascript" src="view/app.js"></script>
  <script type="text/javascript" src="view/product/product.js"></script>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<style>
  div.img-wrap
  {
    width: 200px;
    height: 250px;
    margin-left: 30%;
  }
  .ng-invalid.ng-dirty {
    border-color: #FA787E;
  }
  .ng-valid.ng-dirty {
    border-color: #78FA89;
  }

</style>
<body ng-controller="StoreController as store">
<ul class="list-group">
  <li class="list-group-item" ng-repeat="product in store.products">
    <product-tile></product-tile>

    <div class="gallery">
      <div class="img-wrap">
        <img ng-src="{{product.images[0]}}">
      </div>
    </div>

    <product-panels></product-panels>


  </li>
</ul>
</body>


</html>

