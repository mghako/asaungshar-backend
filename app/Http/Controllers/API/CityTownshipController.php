<?php

namespace App\Http\Controllers\API;

use App\City;
use App\Http\Controllers\Controller;
use App\Http\Resources\CityTownshipCollection;
use Illuminate\Http\Request;

class CityTownshipController extends Controller
{
    public function index($id) {
        $city = City::findOrFail($id);
        $townships = $city->townships;
        return CityTownshipCollection::collection($townships);
    }
}
