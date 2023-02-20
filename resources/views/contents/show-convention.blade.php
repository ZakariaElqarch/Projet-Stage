@extends('layouts.layout');

@section('content');

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
            <p> {{ $conventions->title }} </p>
            <p> {{ $conventions->date_Validiter }} </p>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\convention.css') }}">
@endsection