<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Device;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brands = Brand::where('enabled', 1)->OrderBy('name','ASC')->get();
        $devices = Device::orderBy('updated_at', 'desc')->paginate(16);
        $issues = Issue::orderBy('name')->get();

        if($request->has('id') && !empty($request->get('id'))) {
            $devices = Device::where('brand_id',$request->get('id'))->orderBy('updated_at', 'desc')->paginate(16);
        }

        return view('admin.devices.index', compact('devices', 'brands','issues'));

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
            'brand_id' => 'required|integer',
            'issues' => 'nullable|array',
        ]);


        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/devices','public');
        }


        $created = Device::create($validatedData);

        if($created) {

            if(!empty($validatedData['issues'])) {
                $created->issues()->sync($validatedData['issues']);
            }

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
        $issues = Issue::orderBy('name')->get();
        $brands = Brand::where('enabled', 1)->OrderBy('name','ASC')->get();
        return view('admin.devices.edit', compact('device', 'brands','issues'));
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
            'brand_id' => 'required|integer',
            'issues' => 'nullable|array',
        ]);


        if($request->hasFile('thumbnail')){
            $validatedData['thumbnail'] = $request->file('thumbnail')->store('images/devices','public');
        }

        $updated = $device->update($validatedData);

        if($updated) {

            if(!empty($validatedData['issues'])) {
                $device->issues()->sync($validatedData['issues']);
            }

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


    public function downloadDevicesImage()
    {
        $devices = Device::all()->skip(1);

        echo $devices->count() . "<br>";

        foreach ($devices as $device) {

            $brand = $device->brand->name;
            $url = $device->thumbnail;
            echo "$brand $url <br>";

            $response = Http::get($url);

            if ($response->successful()) {

                $name = basename($url);
                $contents = $response->body();
                $uploadedPath = 'images/' . strtolower($brand) . '/' . $name;
                // Store the file in the 'public' disk
                Storage::disk('public')->put( $uploadedPath , $contents);

                $device->update(['thumbnail' => $uploadedPath]);

                echo "File downloaded successfully";

            } else {
                echo "Failed to download file";
            }

        }

        echo "downloaded All";

    }

}
