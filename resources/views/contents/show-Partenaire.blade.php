@extends('layouts.layout');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('partenaire.store') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Partenaire</h3>
        <div class="panel-body widget-shadow">
        
                <p> {{ $partenaires->title }} </p>
                <p> {{ $partenaires->phone }} </p>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\partenaire.css') }}">
@endsection