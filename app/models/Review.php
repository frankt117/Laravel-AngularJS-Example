<?php

class Review extends Eloquent
{

  protected $fillable = array('imageId', 'stars', 'body', 'author');

}