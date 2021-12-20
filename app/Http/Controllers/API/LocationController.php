<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function provinces(Request $request){
        return Province::all();
    }

    public function regencies(Request $request, $provinces_id){
        return Regency::where('province_id', $provinces_id)->get();
    }

    public function districes(Request $request, $regencies_id){
        return District::where('regency_id', $regencies_id)->get();
    }

    public function villages(Request $request, $districes_id){
        return Village::where('district_id', $districes_id)->get();
    }
}
