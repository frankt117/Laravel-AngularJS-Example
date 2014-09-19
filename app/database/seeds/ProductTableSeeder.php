<?php

class ProductTableSeeder extends Seeder
{
  public function run() {
    DB::table('products')->delete();

    Product::create(array(
      'name' => 'Dodecahedron',
      'price' => 2,
      'description' => "Some gems have hidden qualities beyond their luster, beyond their shine.... Dodecahedron is one of those gems.",
      'canPurchase' => true,
      'soldOut' => true,
      'imageUrl' => "http://dhg7upb7j7jqa.cloudfront.net/shaping_up_with_angular_js/assets/demo/images/gem-07.gif"
    ));

    Product::create(array(
      'name' => 'Pentagonal',
      'price' => 5.95,
      'description' => "Amazing and rare...",
      'canPurchase' => true,
      'soldOut' => true,
      'imageUrl' => "http://dhg7upb7j7jqa.cloudfront.net/shaping_up_with_angular_js/assets/demo/images/gem-03.gif"
    ));

  }

}