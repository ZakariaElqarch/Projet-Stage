<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::all();

        return view('contents.list-service')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $divisions = Division::all();
        return view('contents.add-service')->with('divisions', $divisions);
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
        
        $Service = new Service;
        $Service->id_division = $request->selectdivision;
        $Service->title = $request->title;
        $Service->chef = $request->chef;
        $Service->email = $request->mail;
        $Service->phone = $request->phone;
         
        $Service->save();
        return redirect()->route('service.store')->with('success', 'Data has been saved successfully!');
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
        $services = Service::find($id);
        return view('contents.show-service')->with('services', $services);
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
        $divisions=Division::all();
        $services = Service::find($id);
        return view('contents.update-service')->with('services', $services)
                                                    ->with('divisions', $divisions);
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

       
      
        $update = [
           'id_division' =>$request->selectdivision,
            'title' => $request->title,
           'chef' => $request->chef,
           'email' => $request->mail,
           'phone' => $request->phone,
           
        ];
        Service::where('id', $id)->update($update);
        return redirect()->route('service.store')->with('success', 'Update was successful!');
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
        Service::destroy($id);
        return redirect()->route('service.store')->with('success', 'Data was deleted successfully!');
    }
}
