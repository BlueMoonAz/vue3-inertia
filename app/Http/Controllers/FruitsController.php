<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

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
        DB::insert("insert into fruits(name,price) values (?,?)",
            [$request->get('name'),$request->get('price')]);
        return Redirect::route('fruits.index')->with('message',
            $request->get('name').'を登録しました');
    }

    public function destroy(int $id,string $fruitName ){
        DB::delete("delete from fruits where id=?",[$id]);
        return Redirect::route('fruits.index')->with('message',
            $fruitName.'を削除しました');
    }

    public function update(Request $request){
        //ddd($fruit);
        DB::update("update fruits set name=?,price=? where id=?",
            [$request->get('name'),
            $request->get('price'),
            $request->get('id')]
        );

        return Redirect::route('fruits.index')->with('message',
            $request->get('name').'を更新しました');
    }
}
