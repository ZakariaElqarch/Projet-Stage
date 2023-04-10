<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'mail' => 'required|email',
            'phone'=>'required|regex:/^05.\d/|max:14',
            
            ]);
           if($validator->fails()){
            return redirect()->route('commune.create')->with('error', 'Remplire les champs correctemment')->withInput();
           }else{
            Commune::create([
                'title'=>$request->title,
                'email'=>$request->mail,
                'phone'=>$request->phone
            ]);
            return redirect()->route('commune.create')->with('success', 'Data has been saved successfully!');
           }
       
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
            "title" => $request->title,
            "email" => $request->mail,
            "phone" => $request->phone,
        ];
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'mail' => 'required|email',
            'phone'=>'required|regex:/^05.\d/|max:14',
            
            ]);
           if($validator->fails()){
            return redirect()->back()->with('error', 'Remplire les champs correctemment')->withInput();
           }else{
            Commune::where('id', $id)->update($update);
            return redirect()->route('commune.store')->with('success', 'Update was successful!');
           }
      
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
