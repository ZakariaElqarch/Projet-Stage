@extends('layouts.layout');

@section('content')

<div id="page-wrapper" class="contents">
    <div class="main-page">
        <a href="{{ route('project.edit',$project->id)}}">
            <button name="Sign In" class="btn btn-default add-btn ">Mettre a jour</button>
        </a>
        <a href={{ route('project.store') }}>
            <button class="btn btn-default add-btn ">Retour</button>
        </a>
        <h3 class="title1">Project</h3>
        <div class="panel-body widget-shadow">
            <p> {{$project->title}} </p>
            <p> {{ $project->validationDate }} </p>
            <table class="table">
                <tr>
                  <th>id</th>
                  <td>{{ $project->id }}</td>
      
                </tr>
                <tr>
                  <th>Titre</th>
                  <td>{{ $project->title }}</td>
      
                </tr>
                <tr>
                  <th>Budget </th>
                  <td>{{ $project->budget }}</td>
      
                </tr>
                <tr>
                  <th>pahse</th>
                  <td>{{ $project->phase }}</td>
      
                </tr>
                <tr>
                  <th>Progress </th>
                  <td>{{ $project->progress }}</td>
      
                </tr>
                <tr>
                  <th>cenvention lier </th>
                  <td>{{ $title }}</td>
      
                </tr>
              </table>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\convention.css') }}">
@endsection