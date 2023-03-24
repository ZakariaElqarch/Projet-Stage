<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function getRelatedData($id)
    {
        
        $ServiceData = Service::where('id_division', $id)->get();
        return response()->json($ServiceData);
    }
}
