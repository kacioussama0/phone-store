<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $types = Type::paginate(16);
       return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:brands|max:255',
            'description' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'enabled' => 'nullable'
        ]);

        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/types','public');
        }

        if(Type::create($validatedData)) {
            return redirect()->route('types.index')->with('success','Type créée avec succès.');
        }

        abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:brands|max:255',
            'description' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'enabled' => 'nullable'
        ]);

        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/types','public');
        }

        if($type->update($validatedData)) {
            return redirect()->route('types.index')->with('success','Type Editer avec succès.');
        }

        abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        if($type->delete()) {
            return redirect()->route('types.index')->with('success','Type Supprimer avec succès.');
        }
        abort(500);
    }
}
