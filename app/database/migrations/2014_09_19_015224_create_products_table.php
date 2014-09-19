<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('products', function(Blueprint $table)
    {
      $table->increments('id');
      $table->string('name');
      $table->float('price');
      $table->string('description');
      $table->boolean('canPurchase');
      $table->boolean('soldOut');
      $table->string('imageUrl');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('products');
  }

}
