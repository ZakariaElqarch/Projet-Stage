<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
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
        return view('content.list-project',compact('project'));
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
        $project->progress = $request->progressVal;
        $project->save();
        return redirect('add-project')->with('status','added');
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
        $project->progress = $request->progressVal;
        $project->update();
        return redirect('list-project')->with('status','updated');
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
