@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\convention.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\Table.show.css') }}">
<div id="page-wrapper">
  <div class="main-page">
    <a href={{ route('convention.edit', $conventions->id) }}>
      <button name="Sign In" class="btn btn-default add-btn ">Mettre a jour</button>
    </a>
    <a href={{ route('convention.store') }}>
      <button class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1">Convention</h3>

    <div class="panel-body widget-shadow">
      <div class="table-responsive table-wrapper">
        <table class="table">
          <tr>
            <th>id</th>
           
 
            <td>{{ $conventions->id }}</td>

          </tr>
          <tr>
            <th>Titre</th>
            <td>{{ $conventions->title }}</td>

          </tr>
          <tr>
            <th>La periode du convention </th>
            <td>{{ $conventions->validity }}</td>

          </tr>
          <tr>
            <th>Budget </th>
            <td>{{ $conventions->budget }}</td>

          </tr>
        </table>
      </div>

    </div>
  </div>
</div>
<style>
 




</style>


@endsection