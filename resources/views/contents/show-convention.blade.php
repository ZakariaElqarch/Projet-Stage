@extends('layouts.layout');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <a href={{ route('list-convention') }}>
            <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
          </a>
        <h3 class="title1">Convention</h3>
        <div class="panel-body widget-shadow">
            Convention 1
        </div>
    </div>
</div>
<link rel="stylesheet" href="assets\css\convention.css">
@endsection