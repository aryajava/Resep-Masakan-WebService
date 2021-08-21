<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeApiController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return response()->json(['message' => 'Success', 'data' => $recipes]);
    }
    public function show($id)
    {
        $recipe = Recipe::find($id);
        return response()->json(['message' => 'Success', 'data' => $recipe]);
    }
    public function store(Request $request)
    {
        $recipe = Recipe::create($request->all());
        return response()->json(['message' => 'Add Success', 'data' => $recipe]);
    }
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        $recipe->update($request->all());
        return response()->json(['message' => 'Update Success', 'data' => $recipe]);
    }
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return response()->json(['message' => 'Delete Success', 'data' => null]);
    }
}
