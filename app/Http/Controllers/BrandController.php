<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderBy('updated_at','DESC')->paginate(16);
        return view('admin.brands.index',compact('brands'));
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
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/brands');
        }

        if(Brand::create($validatedData)) {
            return redirect()->route('brands.index')->with('success','Marque créée avec succès.');
        }

        abort(500);

    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:brands,slug,' . $brand->id,
            'description' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'enabled' => 'nullable'
        ]);

        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/brands');
        }

        if($brand->update($validatedData)) {
            return redirect()->route('brands.index')->with('success','Marque Editer avec succès.');
        }

        abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if($brand->delete()) {
            return redirect()->route('brands.index')->with('success','Marque Supprimer avec succès.');
        }
        abort(500);
    }
}
