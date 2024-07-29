<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function brandType()
    {
        $brands = Brand::where('enabled',1)->orderBy('name')->get();
        return view('appointments.brand-type',compact('brands'));
    }
}
