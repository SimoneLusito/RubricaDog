<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\DogEditRequest;
use App\Http\Requests\DogCreateRequest;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dog::all();
        return view('dogs.index', ["dogs" => $dogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::All();
        return view('dogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DogCreateRequest $request)
    {
        Dog::create([
            'name' => $request->name,
            'age' => $request->age,
            'img' => $request->file('img')->store('public/media'),
            'description' => $request->description,
            "category_id" => $request->category_id,
        ]);
        return redirect()->route('dogs.create')->with('success', 'Dati inseriti correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dog $dog)
    {
        return view('dogs.show', ["dog" => $dog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dog $dog)
    {
        return view('dogs.edit', ["dog" => $dog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DogEditRequest $request, Dog $dog)
    {
        $dog->update([
            'name' => $request->name,
            'age' => $request->age,
            "img" => $request->img ? $request->file('img')->store('public/media') : $dog->img,
            'description' => $request->description,
        ]);
        return redirect()->route('dogs.edit', compact("dog"))->with('success', 'Dati modificati correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dog $dog)
    {
        $dog->delete();
        return redirect(route('dogs.index'))->with('success', 'eliminazione effettuata');
    }
}
