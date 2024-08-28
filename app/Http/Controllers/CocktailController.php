<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
<<<<<<< HEAD
use App\Models\CocktailIngredient;
use App\Models\Ingredient;
=======
use FFI;
>>>>>>> main
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        // dd($request->all());

        $validated = $request->validate([
            'name' => 'required| max:50',
<<<<<<< HEAD
=======
            'ingredients' => 'nullable',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
>>>>>>> main
            'price' => 'required|numeric', //price e gradation modificati da string in numeric
            'gradation' => 'nullable|numeric',
            'is_alcoholic' => 'required',
        ]);

        $filename = null;
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = public_path('uploads/cocktails/');
            $file->move($path, $filename);
        }

        $cocktail = new Cocktail();
        $cocktail->name = $validated['name'];
<<<<<<< HEAD
=======
        $cocktail->ingredients = $validated['ingredients'];
        $cocktail->image = $filename ? 'uploads/cocktails/' . $filename : null;
>>>>>>> main
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
        $cocktail_ingredients = CocktailIngredient::findOrFail($id);
        $cocktail = Cocktail::findOrFail($id);
        return view('cocktails.show', compact('cocktail', 'cocktail_ingredients'));
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
<<<<<<< HEAD
=======
            'ingredients' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
>>>>>>> main
            'price' => 'required|numeric',
            'gradation' => 'nullable|numeric',
            'is_alcoholic' => 'required',
        ]);


        $cocktail = Cocktail::findOrFail($id);

        if ($request->has('image')) {
            if ($cocktail->image && file_exists(public_path($cocktail->image))) {
                unlink(public_path($cocktail->image));
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = public_path('uploads/cocktails/');
            $file->move($path, $filename);

            if (File::exists($cocktail->image)) {
                File::delete($cocktail->image);
            }
            $cocktail->image = $filename ? 'uploads/cocktails/' . $filename : null;
        }

        $cocktail->name = $validated['name'];
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
        if (File::exists($cocktail->image)) {
            File::delete($cocktail->image);
        }
        $cocktail->delete();
        return redirect()->route('cocktails.index')->with('success', 'cocktail deleted');
    }
}
