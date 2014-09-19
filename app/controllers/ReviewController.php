<?php

class ReviewController extends \BaseController {

  /**
   * Display all reviews.
   *
   * @return Response
   */
  public function index()
  {
    return Response::json(Review::get());
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    try {
      Review::create(array(
        'productId' => Input::get('productId'),
        'stars' => Input::get('stars'),
        'body' => Input::get('body'),
        'author' => Input::get('author')
      ));
    } catch (Exception $e) {
      Log::error($e);
    }


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
    Review::destroy($id);

    return Response::json(array('success' => true));
  }


}
