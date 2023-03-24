@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\division.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\Table.show.css') }}">


<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('division.store') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Division</h3>
        <div class="panel-body widget-shadow">
                <div class="table-responsive table-wrapper">
                    <table class="table">
                      <tr>
                        <th>id</th>
                        <td>{{ $divisions->id }}</td>
            
                      </tr>
                      <tr>
                        <th>Titre</th>
                        <td>{{ $divisions->title }}</td>
            
                      </tr>
                      <tr>
                        <th>Chef du Divisiion </th>
                        <td>{{ $divisions->chef }}</td>
            
                      </tr>
                      <tr>
                        <th>Email du Division  </th>
                        <td>{{ $divisions->email }}</td>
            
                      </tr>
                      <tr>
                        <th>N tel du Division </th>
                        <td>{{ $divisions->phone }}</td>
            
                      </tr>
                    </table>
                  </div>
            
        
        </div>
    </div>
</div>

@endsection