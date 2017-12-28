<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Category;

class TodoController extends Controller
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
      $todos = Todo::with('category')->get();
      return response()->json($todos);
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
}
