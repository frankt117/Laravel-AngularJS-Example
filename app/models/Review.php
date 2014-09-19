<?php

class Review extends Eloquent
{

  protected $fillable = array('productId', 'stars', 'body', 'author');

}