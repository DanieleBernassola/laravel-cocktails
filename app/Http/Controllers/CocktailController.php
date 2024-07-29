<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;


//controller con le crud

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        //da rivedere con le rotte
        return view('cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cocktails = Cocktail::all();
        return view('cocktails.create', compact('cocktails'))->with('success', 'il cockail è stato inserito nella lista correttamente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required| max:50',
            'ingredients' => 'nullable',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
            'price' => 'required|numeric', //price e gradation modificati da string in numeric
            'gradation' => 'nullable|numeric',
            'is_alcoholic' => 'required',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/cocktails/';
            $file->move($path, $filename);
        }

        $cocktail = new Cocktail();
        $cocktail->name = $validated['name'];
        $cocktail->ingredients = $validated['ingredients'];
        $cocktail->image = $validated['image'];
        $cocktail->price = (float) $validated['price'];
        $cocktail->gradation = (float) $validated['gradation'];
        $cocktail->is_alcoholic = $validated['is_alcoholic'];
        $cocktail->save();
        return redirect()->route('cocktails.index')->with('success', 'cockail salvato');
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
            'price' => 'required|numeric',
            'gradation' => 'nullable|numeric',
            'is_alcoholic' => 'required',
        ]);


        $cocktail = Cocktail::findOrFail($id);


        $cocktail->name = $validated['name'];
        $cocktail->ingredients = $validated['ingredients'];
        $cocktail->price = (float)$validated['price'];
        $cocktail->gradation = (float)$validated['gradation'];
        $cocktail->is_alcoholic = $validated['is_alcoholic'];


        $cocktail->save();


        return redirect()->route('cocktails.index')->with('success', 'cocktail modificato');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        $cocktail->delete();
        return redirect()->route('cocktails.index')->with('success', 'cocktail deleted');
    }
}
