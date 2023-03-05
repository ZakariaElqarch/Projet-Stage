@extends('layouts.layout')

@section('content')
<link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet">
<div id="page-wrapper">
  <div class="card">
    <img src="{{ Auth::user()->picture }}" alt="John" class="img">
    <h1 class="name">{{ Auth::user()->name }}</h1>
    <h2 class="email">{{ Auth::user()->email }}</h2>
    <p class="title">Admin</p>

    <a href="{{ route("logout") }}"><button>Logout</button></a>
  </div>
</div>
@endsection