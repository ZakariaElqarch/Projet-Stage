@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\Table.show.css') }}">
<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('service.store') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Service</h3>
        <div class="panel-body widget-shadow">
            <div class="table-responsive table-wrapper">
                <table class="table">
                  <tr>
                    <th>id</th>
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
                    <th>Email du Service  </th>
                    <td>{{ $services->email }}</td>
        
                  </tr>
                  <tr>
                    <th>N tel du Service </th>
                    <td>{{ $services->phone }}</td>
        
                  </tr>
                  <tr>
                    <th>Division Parent </th>
                    <td>{{ $title }}</td>
        
                  </tr>
                </table>
              </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\service.css') }}">
@endsection