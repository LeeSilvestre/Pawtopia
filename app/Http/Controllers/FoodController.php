<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    public function allFoods()
    {
        $books = Food::all();
        return response()->json($books, 200);
    }

    public function showAFood($id)
    {
        $book = Food::find($id);
        if (!$book) {
            return response()->json(['error' => 'Food not found'], 404);
        }
        return response()->json($book, 200);
    }

    public function createFood(Request $request)
    {
        $book = Food::create($request->all());
        return response()->json($book, 201);
    }

    public function updateFoodP(Request $request, $id)
    {
        $book = Food::find($id);
        if (!$book) {
            return response()->json(['error' => 'Food not found'], 404);
        }
        $book->update($request->all());
        return response()->json(['message' => 'Food updated successfully'], 200);
    }

    public function deleteFoodP($id)
    {
        $book = Food::find($id);
        if (!$book) {
            return response()->json(['error' => 'Food not found'], 404);
        }
        $book->delete();
        return response()->json(['message' => 'Food deleted successfully'], 200);
    }
}

