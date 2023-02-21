<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use Illuminate\Database\Eloquent\Model;
use App\Models\Convention;
class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = project::all();
        $convention = Convention::all();
        return view('content.list-project')->with('convention', $convention)->with('project', $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convention = Convention::all();
        return view('content.add-project')->with('convention', $convention);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new project;
        $project->title = $request->title;
        $project->validationDate = $request->validationDate;
        $project->budget = $request->budget;
        $project->convID = $request->convention;
        $project->phase = $request->phase;
        if($request->phase == 'initiale'){
            $project->progress = 0;
        }elseif($request->phase == 'realise'){
            $project->progress = 100;
        }else{
            $project->progress = $request->progress;
        }
        $project->save();
        if ($project instanceof Model) {
            toastr()->success('Projet Ajouter!');

            return redirect()->route('add-project');
        }

        toastr()->error('Un erreur est survenue, veuillez réessayer plus tard.');

        return back();
        //return redirect('add-project')->with('status','added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = project::find($id);
        return view('content.show-project' ,compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = project::find($id);
        $convention = Convention::all();
        return view('content.edit-project')->with('project',$project)->with('convention', $convention);
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
        $project = project::find($id);
        $project->title = $request->title;
        $project->validationDate = $request->validationDate;
        $project->budget = $request->budget;
        $project->convID = $request->convention;
        $project->phase = $request->phase;
        if($request->phase == 'initiale'){
            $project->progress = 0;
        }elseif($request->phase == 'realise'){
            $project->progress = 100;
        }else{
            $project->progress = $request->progress;
        }
        $project->update();
        if ($project instanceof Model) {
            toastr()->success('Project Modifier!');

            return redirect()->route('list-project');
        }

        toastr()->error('Un erreur est survenue, veuillez réessayer plus tard.');

        return back();
        //return redirect('list-project')->with('status','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = project::find($id);
        $project->delete();
        return redirect('list-project')->with('status','updated');
    }
}
