@extends('layouts.layout')

@section('content')
    <div class="capitalize">
        <div class="row-one" >
    <div class="col-md-4 widget">
            <div class="stats-left ">
                <h5>Convention</h5>
                <h4>{{ $convention->titre }}</h4>

            </div>
            <div class="stats-right">
                <label> {{ $convention->id }}</label>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 widget states-mdl">
            <div class="stats-left">
                <h5>Project</h5>
                <h4>{{ $project->title }}</h4>
            </div>
            <div class="stats-right">
                <label> {{ $project->id }}</label>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 widget states-last">
            <div class="stats-left">
                <h5>Phase</h5>
                <h4>{{ $project->phase }}</h4>
            </div>
            <div class="stats-right">
                <label>{{ $project->progress }}%</label>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
@endsection
