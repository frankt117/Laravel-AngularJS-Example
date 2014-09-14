<?php

class CommentController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return Response::json(Comment::get());
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    Comment::create(array(
      'author' => Input::get('author'),
      'text' => Input::get('text')
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
    Comment::destroy($id);

    return Response::json(array('success' => true));
  }


}
