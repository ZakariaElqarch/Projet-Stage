<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class divisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Alldivisions = Division::all();
       
        return view('contents.list-division')->with('Alldivisions', $Alldivisions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contents.add-division');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    Division::create([                  
            "title" => $request->title, 
            "chef" => $request->chef,
            "email" => $request->mail,
            "phone" => $request->phone
        ]);
        return redirect()->route('division.store')->with('success', 'Data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $divisions = Division::find($id);
        return view('contents.show-division')->with('divisions', $divisions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $divisions = Division::find($id);
        return view('contents.update-division')->with('divisions', $divisions);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = [
            "title" => $request->title,
            "chef" => $request->chef,
            "email" => $request->mail,
            "phone" => $request->phone
        ];
        Division::where('id', $id)->update($update);
        return redirect()->route('division.store')->with('success', 'Update was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         //
         Division::destroy($id);
         return redirect()->route('division.store')->with('success', 'Data has been deleted successfully!');
    }
}
