<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\Convention;
use App\Models\conventions_communes;
use App\Models\Division;
use App\Models\Partenaire;
use App\Models\Partenaires_convention;
use App\Models\Project;
use App\Models\Service;
use App\Models\services_conventions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ConventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $conventions = Convention::all();

        return view('contents.list-convention')->with('conventions', $conventions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $services = Service::all();
        $divisions = Division::all();
        $communes = Commune::all();
        $partenaires = Partenaire::all();


        return view('contents.add-convention')
            ->with('communes', $communes)
            ->with('partenaires', $partenaires)
            ->with('divisions', $divisions)
            ->with('services', $services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = DB::table('conventions')->insertGetId([
            "title" => $request->title,
            "validity" => $request->validity,
            "budget" => $request->budget,
            "id_division" => $request->SelectDivision,
            "id_service" => $request->SelectService,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        $SelectCommunes = $request->input('SelectCommunes');
        if (is_array($SelectCommunes)) {
            $CommunesArray = $SelectCommunes;
        } else {
            $CommunesArray = explode(',', $SelectCommunes);
        }
        foreach ($CommunesArray as $CommuneId) {
            conventions_communes::create([
                "id_convention" =>  $id,
                "id_commune" => $CommuneId
            ]);
        }


        $SelectPartenaire = $request->input('SelectPartenaire');
        if (is_array($SelectPartenaire)) {
            $PartenaireArray = $SelectPartenaire;
        } else {
            $PartenaireArray = explode(',', $SelectPartenaire);
        }

        foreach ($PartenaireArray as $PartenaireId) {
            Partenaires_convention::create([
                "id_convention" =>  $id,
                "id_partenaire" => $PartenaireId
            ]);
        }
        return redirect()->route('convention.store')
        ->with('success', 'Data was saved successfully!');
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
        $services = Service::all();
        $divisions = Division::all();
        $communes = Commune::all();
        $partenaires = Partenaire::all();





        $conventions = Convention::find($id);
        return view('contents.show-convention')->with('conventions', $conventions)
            ->with('communes', $communes)
            ->with('partenaires', $partenaires)
            ->with('divisions', $divisions)
            ->with('services', $services);
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
        $services = Service::all();
       
        $communes = Commune::all();
        $partenaires = Partenaire::all();
        
       
       $partenaireSelected = DB::select('Select id_partenaire from gestion_convention_test.partenaires_conventions where id_convention = ?',[$id]);
      
       $communeSelected = DB::select('Select id_commune from gestion_convention_test.conventions_communes where id_convention = ?',[$id]); 
        
       $divisions = Division::all();

       $conventions = Convention::find($id);

        return view('contents.update-convention')->with('conventions', $conventions)
        ->with('communes', $communes)
        ->with('partenaires', $partenaires)
        ->with('divisions', $divisions)
        ->with('services', $services)
        ->with('partenaireSelected', $partenaireSelected)
        ->with('communeSelected', $communeSelected);
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
            "validity" => $request->validity,
            "budget" => $request->budget,
            "id_division" => $request->SelectDivision,
            "id_service" => $request->SelectService,
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        Convention::where('id', $id)->update($update);
        return redirect()->route('convention.store')->with('success', 'Update was successful!');
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
        Convention::destroy($id);
        return redirect()->route('convention.index')->with('success', 'Data has been deleted successfully!');
    }
}
