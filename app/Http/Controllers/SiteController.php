<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Brand;
use App\Models\Device;
use App\Models\Issue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function brandType()
    {
        $brands = Brand::where('enabled',1)->orderBy('name')->get();
        return view('appointments.brand-type',compact('brands'));
    }

    public function deviceType($brandId)
    {
        $types = [];
        $devicesType = Device::where('brand_id',$brandId)->distinct()->get('type_id');


        foreach ($devicesType as $device) {
            $types[] = [
                'id' => $device->type_id,
                'name' => $device->device_type->name,
                'thumbnail' => $device->device_type->thumbnail,
            ];
        }


        return view('appointments.device-type',compact('brandId','types'));
    }

    public function deviceModel($brandId,$typeId) {
        $devices = Device::where('brand_id',$brandId)->where('enabled',1)->where('type_id',$typeId)->orderBy('name')->get();
        return view('appointments.device-model',compact('brandId','typeId','devices'));
    }

    public function issues($brandId,$typeId,$modelId) {
        $device = Device::find($modelId);
        $issues = $device->issues()->get();
        return view('appointments.device-issues',compact('brandId','typeId','device','issues'));
    }

    public function contact($brandId,$typeId,$modelId,$issueIds) {
        $device = Device::find($modelId);
        $issues = $device->issues()->get();
        return view('appointments.contact',compact('brandId','typeId','device','issues','issueIds'));
    }

    public function send(Request $request,$brandId,$typeId,$modelId,$issueIds) {

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'app-date' => 'required',
            'time' => 'required',
        ]);

        $validatedData['appointment_date'] = $validatedData['app-date'];
        $validatedData['appointment_time'] = $validatedData['time'];
        $validatedData['issues'] = $issueIds;
        $validatedData['device_id'] = $modelId;

        $validatedData['token'] = str()->random(32);

        $created = Appointment::create($validatedData);

        if($created) return redirect()->to('appointments/confirmation/' . $validatedData['token']);


        abort(500);

    }


    public function confirmation($token)
    {

        $appointment = Appointment::where('token',$token)->first();

        if(empty($appointment)) {
            abort(404);
        }


        $appointment->token = null;

        $appointment->save();

        $arr = explode('-',$appointment->issues);

        $issues = [];

        foreach ($arr as $issue) {
            $r = Issue::where('id',$issue)->first();
            $issues[] = $r->name;
        }

        return view('appointments.confirmation',compact('appointment','issues'));
    }



}
