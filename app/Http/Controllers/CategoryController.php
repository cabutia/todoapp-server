<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

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

    public function store(Request $r)
    {
      $category = Category::create($r->all());
      return response()->json($category);
    }

    public function delete($id, Request $r)
    {
      Category::destroy($r->get('id'));
      return response()->json(Category::all());
    }
}
