@extends('layouts.layout');
@section('content');



<div id="page-wrapper">
 

    <a href={{ route('commune.store') }}>
      <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1">Commune</h3>
  
  <div class="form-three widget-shadow">
    <form action="{{ route('commune.update',$communes->id) }}" method="post" class="form-horizontal commune-form">
      @csrf
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="title" value="{{ $communes->title }}" class="form-control1">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">E-mail<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="email" name="mail" value="{{ $communes->email }}" class="form-control1">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">N-Tel<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="tel" value="{{ $communes->phone }}" name="phone" class="form-control1 phone">
        </div>
      </div>
      <div class="col-sm-offset-2">
        <button type="submit" class="sub btn btn-default add-btn update_btn">Mettre a jour</button>
      </div>
    </form>
  </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\commune.css') }}">
<script src="{{ asset('assets/vendors/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\commune.Validate.js') }}"></script>
@endsection