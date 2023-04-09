<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function getRelatedData($id)
    {
        
        $ServiceData = Service::where('division_id', $id)->get();
        return response()->json($ServiceData);
    }
}
