<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brands = Brand::where('enabled', 1)->OrderBy('name','ASC')->get();
        $devices = Device::orderBy('updated_at', 'desc')->paginate(16);

        if($request->has('id') && !empty($request->get('id'))) {
            $devices = Device::where('brand_id',$request->get('id'))->orderBy('updated_at', 'desc')->paginate(16);
        }

        return view('admin.devices.index', compact('devices', 'brands'));

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:devices|max:255',
            'description' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'enabled' => 'nullable',
            'brand_id' => 'required|integer'
        ]);


        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/devices');
        }

        if(Device::create($validatedData)) {
            return redirect()->route('devices.index')->with('success','Appareil créée avec succès.');
        }

        abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        $brands = Brand::where('enabled', 1)->OrderBy('name','ASC')->get();
        return view('admin.devices.edit', compact('device', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:devices,slug,' . $device->id,
            'description' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'enabled' => 'nullable',
            'brand_id' => 'required|integer'
        ]);


        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/devices');
        }

        if($device->update($validatedData)) {
            return redirect()->route('devices.index')->with('success','Appareil editer avec succès.');
        }

        abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        if($device->delete()) {
            return redirect()->route('devices.index')->with('success','Appareil supprimer avec succès.');
        }
    }

}
