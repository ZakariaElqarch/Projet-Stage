<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use ParentIterator;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $partenaires = Partenaire::all();
       
        return view('contents.list-partenaire')->with('partenaires', $partenaires);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contents.add-partenaire');
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
        
       Partenaire::create([
            "titre" => $request->titre,
            "email" => $request->mail,
            "tel" => $request->phone
        ]);
        return redirect()->route('partenaire.store')->with('success', 'Data was saved successfully!');
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
        $partenaires = Partenaire::find($id);
        return view('contents.show-partenaire')->with('partenaires', $partenaires);
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
        $partenaires = Partenaire::find($id);
        return view('contents.update-partenaire')->with('partenaires', $partenaires);
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
        Partenaire::where('id', $id)->update($update);
        return redirect()->route('partenaire.store')->with('success', 'Update was successful!');
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
         Partenaire::destroy($id);
        return redirect()->route('convention.store')->with('success', 'Data was deleted successfully!');
    }
}
