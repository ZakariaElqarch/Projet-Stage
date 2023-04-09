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
        $Allconvention = Convention::all();
        return view('contents.list-project')
        ->with('Allconvention', $Allconvention)
        ->with('project', $project);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $convention = Convention::all();
        return view('contents.add-project')
        ->with('convention', $convention);
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
        $project->validity = $request->validationDate;
        $project->budget = $request->budget;
        $project->convention_id = $request->convention;
        $project->phase = $request->phase;
        if ($request->phase == 'initiale') {
            $project->progress = 0;
        } elseif ($request->phase == 'realise') {
            $project->progress = 100;
        } else {
            $project->progress = $request->progress;
        }
        $project->save();
        if ($project instanceof Model) {
       

            return redirect()->route('project.create')->with('success', 'Data wasa saved successfully!');
        }

     

        return back()->with('success', 'Data was saved successfully!');
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
        $title = Convention::whereHas('projects', function ($query) use ($id) {
            $query->where('id', $id);
        })->value('title');
        return view('contents.show-project')->with('project',$project)->with('title', $title);
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
        return view('contents.update-project')
                        ->with('project', $project)
                        ->with('convention', $convention);
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

        if ($request->phase == 'initiale') {
           $progress= 0;
        } elseif ($request->phase == 'realise') {
            $progress = 100;
        } else {
            $progress= $request->progress;
        }

        $update = [
            "title" => $request->title,
            "validity" => $request->validationDate,
            "budget" => $request->budget,
            "convention_id"=> $request->convention,
            'phase'=> $request->phase,
            'progress'=> $progress,
        ];
        Project::where('id', $id)->update($update);
        return redirect()->route('project.store')->with('success', 'Update was successful!');


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
        return redirect('project.store')->with('status', 'updated');
    }
}
