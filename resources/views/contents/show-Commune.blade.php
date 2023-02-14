@extends('layouts.layout');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('list-commune') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Commune</h3>
        <div class="panel-body widget-shadow">
            Commune 1
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\commune.css') }}">
@endsection