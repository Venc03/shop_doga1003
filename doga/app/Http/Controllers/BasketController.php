<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\User;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index(){
        $basket = response()->json(Basket::all());
        return $basket;
    }

    public function show($id){
        $basket = response()->json(Basket::find($id));
        return $basket;
    }

    public function destroy($id){
        Basket::find($id)->delete();
    }

    public function store(Request $request){
        $basket = new Basket();
        $basket -> basket_id = $request -> basket_id;
        $basket -> item_id = $request -> item_id;
        $basket -> user_id = $request -> user_id;
        $basket -> save();
    }

    public function update(Request $request, $id){
        $basket = Basket::find($id);
        $basket -> basket_id = $request -> basket_id;
        $basket -> item_id = $request -> item_id;
        $basket -> user_id = $request -> user_id;
        $basket -> save();
    }


    /* View */
    public function newView(){
        $users = User::all();
        return view('basket.new', ['users' => $users]);
    }

    public function editView($id){
        $users = User::all();
        $basket = Basket::find($id);
        return view('basket.new', ['users' => $users, 'basket' => $basket]);
    }

    public function listView(){
        $basket = Basket::all();
        return view('basket.list', ['basket' => $basket]);
    }
}


