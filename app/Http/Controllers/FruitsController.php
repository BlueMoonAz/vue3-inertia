<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Support\Facades\Request;
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

    public function create(Request $request){
        DB::insert("insert into fruits(name) values (?)",[$request->get('name')]);
        return Redirect::route('fruits.index');
    }

    public function destroy(int $id){
        DB::delete("delete from fruits where id=?",[$id]);
        return Redirect::route('fruits.index');
    }

    public function update(Request $request){
        //ddd($fruit);
        DB::update("update fruits set name=? where id=?",
            [$request->get('name'),$request->get('id')]
        );

        return Redirect::route('fruits.index');
    }
}
