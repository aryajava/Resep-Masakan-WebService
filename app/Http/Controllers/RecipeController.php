<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact(['recipes']));
    }
    public function create()
    {
        return view('recipes.create');
    }
    public function store(Request $request)
    {
        Recipe::create($request->all());
        return redirect('/recipes');
    }
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        return view('recipes.edit', compact(['recipe']));
    }
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);
        $recipe->update($request->all());
        return redirect('/recipes');
    }
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();
        return redirect('/recipes');
    }
}
