<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('reviews', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('productId');
      $table->integer('stars');
      $table->string('body');
      $table->string('author');
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
    Schema::drop('reviews');
  }

}
