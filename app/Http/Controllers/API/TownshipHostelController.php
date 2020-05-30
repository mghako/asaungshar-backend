<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TownshipHostelCollection;
use App\Township;
use Illuminate\Http\Request;

class TownshipHostelController extends Controller
{
    public function index($id) {
        
        $township = Township::findOrFail($id);
        $hostels = $township->hostels;
        return TownshipHostelCollection::collection($hostels);
    }
}
