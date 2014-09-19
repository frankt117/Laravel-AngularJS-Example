<?php

class ProductController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Response::json(Product::get());
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    Product::create(array(
      'name' => Input::get('name'),
      'price' => Input::get('price'),
      'description' => Input::get('description'),
      'canPurchase' => Input::get('canPurchase'),
      'soldOut' => Input::get('soldOut'),
      'imageUrl' => Input::get('imageUrl')
    ));

    return Response::json(array('success' => true));
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    Product::destroy($id);

    return Response::json(array('success' => true));
  }


}
