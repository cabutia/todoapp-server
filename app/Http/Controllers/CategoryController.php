<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function all()
    {
      $categories = Category::all();
      return response()->json($categories);
    }

    public function show($id)
    {

    }

    public function update(Request $r)
    {

    }

    public function create(Request $r)
    {

    }

    public function delete($id, Request $r)
    {

    }

    //
}
