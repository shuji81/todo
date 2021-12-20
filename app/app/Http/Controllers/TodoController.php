<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }

    public function create(Request $request)
    {
        return "create";
    }

    public function update(Request $request)
    {
        return "update";
    }

    public function delete(Request $request)
    {
        return "delete";
    }
}
