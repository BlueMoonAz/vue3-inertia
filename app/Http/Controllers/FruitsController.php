<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Fruit;
use Inertia\Inertia;

class FruitsController extends Controller
{
    //
    public function index(Request $request){
        return Inertia::render(
            'Fruits/List',['items' => Fruit::all()]
        );
    }

    public function create(Request $request){
        Fruit::create($request->validate([
            'name' => ['required', 'max:50'],
          ]));

          to_route('fruits.index');
          return Redirect::route('fruits.index');
    }
}
