<?php

class Product extends Eloquent
{

  protected $fillable = array('name', 'price', 'description', 'canPurchase', 'soldOut', 'image');

}