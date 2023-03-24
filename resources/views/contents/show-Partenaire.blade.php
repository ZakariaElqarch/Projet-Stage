@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\partenaire.css') }}">
<link rel="stylesheet" href="{{ asset('assets\css\Table.show.css') }}">

<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('partenaire.store') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Partenaire</h3>
        <div class="panel-body widget-shadow">
        
                <p> {{ $partenaires->title }} </p>
                <p> {{ $partenaires->phone }} </p>
                <div class="table-responsive table-wrapper">
                    <table class="table">
                      <tr>
                        <th>id</th>
                        <td>{{ $partenaires->id }}</td>
            
                      </tr>
                      <tr>
                        <th>Titre</th>
                        <td>{{ $partenaires->title }}</td>
            
                      </tr>
                      <tr>
                        <th>Email du Commune </th>
                        <td>{{ $partenaires->email }}</td>
            
                      </tr>
                      <tr>
                        <th>N tel du Commune </th>
                        <td>{{ $partenaires->phone }}</td>
            
                      </tr>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection