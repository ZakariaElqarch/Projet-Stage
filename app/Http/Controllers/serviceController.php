<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'chef'=>'required',
            'mail' => 'required|email',
            'phone'=>'required|regex:/^05.\d/|max:14',
            
            ]);
           if($validator->fails()){
            return redirect()->route('service.create')->with('error', 'Remplire les champs correctemment')->withInput();
           }else{
            $Service = new Service;
            $Service->division_id = $request->selectdivision;
            $Service->title = $request->title;
            $Service->chef = $request->chef;
            $Service->email = $request->mail;
            $Service->phone = $request->phone;
             
            $Service->save();
            return redirect()->route('service.create')->with('success', 'Data has been saved successfully!');
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
        $services = Service::find($id);
        $title = Division::whereHas('services', function ($query) use ($id) {
            $query->where('id', $id);
        })->value('title');
     

        $services = Service::find($id);
        return view('contents.show-service')->with('services', $services) 
        ->with('title', $title);
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
           'division_id' =>$request->selectdivision,
            'title' => $request->title,
           'chef' => $request->chef,
           'email' => $request->mail,
           'phone' => $request->phone,
           
        ];
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'chef'=>'required',
            'mail' => 'required|email',
            'phone'=>'required|regex:/^05.\d/|max:14',
            
            ]);
           if($validator->fails()){
            return redirect()->back()->with('error', 'Remplire les champs correctemment')->withInput();
           }else{
            Service::where('id', $id)->update($update);
            return redirect()->route('project.store')->with('success', 'Update was successful!');
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
        Service::destroy($id);
        return redirect()->route('service.store')->with('success', 'Data was deleted successfully!');
    }
}
