<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $issues = Issue::paginate(16);
       return view('admin.issues.index', compact('issues'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:brands|max:255',
            'description' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/issues','public');
        }

        if(Issue::create($validatedData)) {
            return redirect()->route('issues.index')->with('success','Panne créée avec succès.');
        }

        abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issue $issue)
    {
        return view('admin.issues.edit', compact('issue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Issue $issue)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:brands|max:255',
            'description' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'enabled' => 'nullable'
        ]);

        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('issues/types','public');
        }

        if($issue->update($validatedData)) {
            return redirect()->route('issues.index')->with('success','Panne Editer avec succès.');
        }

        abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
    {
        if($issue->delete()) {
            return redirect()->route('issues.index')->with('success','Panne Supprimer avec succès.');
        }
        abort(500);
    }
}
