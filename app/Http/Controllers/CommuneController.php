<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $communes = Commune::all();
        return view('contents.list-commune')->with('communes', $communes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contents.add-commune');
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
        Commune::create([
            'titre'=>$request->titre,
            'tel'=>$request->phone,
            'email'=>$request->mail
        ]);
        return redirect()->route('commune.store')->with('success', 'Data has been saved successfully!');
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
        $communes = Commune::find($id);
        return view('contents.show-commune')->with('communes', $communes);
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
        $communes = Commune::find($id);
        return view('contents.update-commune')->with('communes', $communes);
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
            "titre" => $request->titre,
            "email" => $request->mail,
            "tel" => $request->phone,
        ];
        Commune::where('id', $id)->update($update);
        return redirect()->route('commune.store')->with('success', 'Update was successful!');
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
        Commune::destroy($id);
        return redirect()->route('commune.store')->with('success', 'Data has been deleted successfully!');
    }
}
