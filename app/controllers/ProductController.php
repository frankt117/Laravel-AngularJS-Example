<?php

class ProductController extends \BaseController {

  /**
   * Display all products.
   *
   * @return Response
   */
  public function index()
  {
      return Response::json(Product::get());
  }

  /**
   * Display product by id.
   *
   * * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
      return Response::json(Product::where('id', $id)->first());
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
