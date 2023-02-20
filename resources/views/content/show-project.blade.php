@extends('layouts.layout');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <a href="{{ route('edit-project',$project->id)}}>
            <button name="Sign In" class="btn btn-default add-btn ">Mettre a jour</button>
        </a>
        <a href={{ route('list-project') }}>
            <button class="btn btn-default add-btn ">Retour</button>
        </a>
        <h3 class="title1">Project</h3>
        <div class="panel-body widget-shadow">
            <p> {{$project->title}} </p>
            <p> {{ $project->validationDate }} </p>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\convention.css') }}">
@endsection