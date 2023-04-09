@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\Table.show.css') }}">
<div id="page-wrapper">
    <div class="main-page">
      <a href={{ route('service.edit', $services->id) }}>
        <button name="Sign In" class="btn btn-default add-btn ">Mettre a jour</button>
      </a>
        <a href={{ route('service.store') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
          
          <h3 class="title1"><i class="bi bi-house-gear nav_icon"> Service</i></h3>
        <div class="panel-body widget-shadow">
            <div class="table-responsive table-wrapper">
                <table class="table">
                  <tr>
                    <th>Id</th>
                    <td>{{ $services->id }}</td>
        
                  </tr>
                  <tr>
                    <th>Titre</th>
                    <td>{{ $services->title }}</td>
        
                  </tr>
                  <tr>
                    <th>Chef du Service </th>
                    <td>{{ $services->chef }}</td>
        
                  </tr>
                  <tr>
                    <th>Division</th>
                    <td>{{ $title }}</td>
        
                  </tr>
                  <tr>
                    <th>Email du Service  </th>
                    <td>{{ $services->email }}</td>
        
                  </tr>
                  <tr>
                    <th>N tel du Service </th>
                    <td>{{ $services->phone }}</td>
        
                  </tr>
                 
                </table>
              </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\service.css') }}">
@endsection