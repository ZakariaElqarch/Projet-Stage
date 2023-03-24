@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\commune.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\Table.show.css') }}">
<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('commune.store') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Commune</h3>
        <div class="panel-body widget-shadow">
         
           <div class="table-responsive table-wrapper">
            <table class="table">
              <tr>
                <th>id</th>
                <td>{{ $communes->id }}</td>
    
              </tr>
              <tr>
                <th>Titre</th>
                <td>{{ $communes->title }}</td>
    
              </tr>
              <tr>
                <th>Email du Commune </th>
                <td>{{ $communes->email }}</td>
    
              </tr>
              <tr>
                <th>N tel du Commune </th>
                <td>{{ $communes->phone }}</td>
    
              </tr>
            </table>
          </div>
        </div>
    </div>
</div>

@endsection