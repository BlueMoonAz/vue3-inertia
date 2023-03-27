<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;
use Inertia\Inertia;

class FruitsListController extends Controller
{
    //
    public function index(Request $request){
        return Inertia::render(
            'List',['items' => Fruit::all()]
        );
    }
}
