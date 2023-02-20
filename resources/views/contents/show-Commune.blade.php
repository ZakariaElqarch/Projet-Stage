@extends('layouts.layout');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('commune.store') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Commune</h3>
        <div class="panel-body widget-shadow">
           {{ $communes->titre }}
           {{ $communes->tel }}
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\commune.css') }}">
@endsection