<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        //da rivedere con le rotte
        return view('cocktail.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cocktails.create')->with('il cockail è stato inserito nella lista correttamente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'price' => 'required|string',
            'gradation' => 'nullable|string',
            'is_alcoholic' => 'required',
        ]);

        $cocktail = new Cocktail();
        $cocktail->name = $validated['name'];
        $cocktail->ingredients = $validated['ingredients'];
        $cocktail->price = $validated['price'];
        $cocktail->gradation = $validated['gradation'];
        $cocktail->is_alcoholic = $validated['is_alcoholic'];
        $cocktail->save();
        return redirect()->route('cocktails.index')->with('cockail salvato');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        return view('cocktails.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        return view('cocktails.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'price' => 'required|string',
            'gradation' => 'nullable|string',
            'is_alcoholic' => 'required',
        ]);


        $cocktail = Cocktail::findOrFail($id);


        $cocktail->name = $validated['name'];
        $cocktail->ingredients = $validated['ingredients'];
        $cocktail->price = $validated['price'];
        $cocktail->gradation = $validated['gradation'];
        $cocktail->is_alcoholic = $validated['is_alcoholic'];


        $cocktail->save();


        return redirect()->route('cocktails.index')->with('cocktail modificato');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        $cocktail->delete();
        return redirect()->route('cocktails.index')->with('cocktail cancellato');
    }
}
