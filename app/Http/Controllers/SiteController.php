<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Device;
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
}
