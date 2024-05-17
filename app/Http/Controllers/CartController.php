<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function allItems($id)
    {
        $items = Cart::where('user_id', $id)->get();
        return response()->json($items);
    }

    public function getItem($user_id, $food_id)
    {
        $item = Cart::where('user_id', $user_id)->where('food_id', $food_id)->first();
        return response()->json($item);
    }

    public function addItems(Request $request)
    {
        $data = $request->all();
        $item = Cart::create($data);
        return response()->json($item);
    }

    public function updateItem(Request $request)
    {
        $data = $request->all();
        $item = Cart::where('user_id', $data['user_id'])->where('food_id', $data['food_id'])->update(['item_qty' => $data['item_qty']]);
        return response()->json($item);
    }

    public function deleteItem($user_id, $food_id)
    {
        $item = Cart::where('user_id', $user_id)->where('food_id', $food_id)->delete();
        return response()->json($item);
    }

    public function deleteItems($id)
    {
        $items = Cart::where('user_id', $id)->delete();
        return response()->json($items);
    }
}
