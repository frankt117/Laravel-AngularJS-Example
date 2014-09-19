<?php

class ReviewTableSeeder extends Seeder
{
  public function run() {
    DB::table('reviews')->delete();

    Review::create(array(
      'productId' => 1,
      'stars' => 5,
      'body' => 'I love this product!',
      'author' => 'joe@thomas.com'
    ));

    Review::create(array(
      'productId' => 1,
      'stars' => 3,
      'body' => 'Not bad for the price.',
      'author' => 'yolo1117@gmail.com'
    ));

    Review::create(array(
      'productId' => 2,
      'stars' => 1,
      'body' => 'Horrible product!',
      'author' => 'derstan@gmail.com'
    ));

    Review::create(array(
      'productId' => 2,
      'stars' => 2,
      'body' => 'Needs more...',
      'author' => 'wedemboyz@gmail.com'
    ));
  }

}