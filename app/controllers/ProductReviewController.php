<?php

class ProductReviewController extends \BaseController {

  /**
   * Display all comments by productId.
   *
   * @return Response
   */
  public function index($productId)
  {
    return Response::json(Review::where('productId', $productId)->get());
  }

  /**
   * Display a listing of the resource.
   *
   * * @param  int  $id
   * @return Response
   */
  public function show($productId, $commentId)
  {
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {

  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }


}
