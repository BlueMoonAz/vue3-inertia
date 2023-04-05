<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Fruit;
use Inertia\Inertia;

class FruitsController extends Controller
{
    //
    public function index(Request $request){
        return Inertia::render(
            'Fruits/List',['items' => DB::select("select * from fruits order by id")]
        );
    }

    public function create(Fruit $fruit){
        $fruit->create(Request::validate([
            'name' => ['required', 'max:50'],
          ]));

        return Redirect::route('fruits.index');
    }

    public function destroy(Fruit $fruit){
        $fruit->delete();
        return Redirect::route('fruits.index');
    }

    public function update(Fruit $fruit){
        //ddd($fruit);
        $fruit->update(
            Request::validate([
                'name' => ['required', 'max:50'],
            ])
        );
        return Redirect::route('fruits.index');
    }
}
