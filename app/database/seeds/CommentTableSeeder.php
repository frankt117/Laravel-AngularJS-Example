<?php

class CommentTableSeeder extends Seeder
{
  public function run() {
    DB::table('comments')->delete();

    Comment::create(array(
      'author' => 'Derstan',
      'text' => 'This is good stuff. GG'
    ));

    Comment::create(array(
      'author' => 'Jessie',
      'text' => 'Could be better. Step it up.'
    ));

    Comment::create(array(
      'author' => 'Elsa',
      'text' => 'Angular FTW!'
    ));
  }

}