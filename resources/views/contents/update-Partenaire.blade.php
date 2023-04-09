@extends('layouts.layout');
@section('content');



<div id="page-wrapper">


  <a href={{ route('partenaire.store') }}>
    <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
  </a>
  <h3 class="title1"><i class="bi bi-people-fill nav_icon"> Partenaire</i></h3>

  <div class="form-three widget-shadow">
    <form action="{{ route('partenaire.update',$partenaires->id) }}" method="post" class="form-horizontal commune-form">

      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="title" value="{{ $partenaires->title }}" class="form-control1">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">E-mail<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="email" name="mail" value="{{ $partenaires->email }}" class="form-control1">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">N-Tel<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="tel" value="{{ $partenaires->phone }}" name="phone" class="form-control1 phone">
        </div>
      </div>
      <div class="col-sm-offset-2">
        <button type="submit" class="sub btn btn-default add-btn update_btn">Mettre a jour</button>
        <button type="reset" class="sub btn btn-default add-btn update_btn">Vider</button>
      </div>
    </form>
  </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\partenaire.css') }}">
<script src="{{ asset('assets/vendors/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\commune.Validate.js') }}"></script>
@endsection