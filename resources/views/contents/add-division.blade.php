@extends('layouts.layout');
@section('content');

<link rel="stylesheet" href="{{ asset('assets\css\Division.css') }}">

<div id="page-wrapper">
 

    <a href={{ route('division.store') }}>
      <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1"><i class="bi bi-building nav_icon"> Division</i> </h3>
  
  <div class="form-three widget-shadow">
    <form action="{{ route('division.store')}}" method="post" class="form-horizontal division-form">
    @csrf
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="title" class="form-control1" placeholder="Titre">
        </div>
      </div>

	  <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Chef de Division<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="chef" class="form-control1"  placeholder="Nom">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">E-mail<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="email" name="mail" class="form-control1" placeholder="e-mail">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">N-tel<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="tel" name="phone"  class="form-control1 phone" placeholder="tel">
        </div>
      </div>
      <div class="col-sm-offset-2">
        <button type="submit" class="sub btn btn-default add-btn">Enregistere</button>
        <button type="reset" class="btn btn-default add-btn">Vider</button>

      </div>
      <div class="required"> * : Ces champs sont obligatoires</div>
    </form>
  </div>
</div>

<script src="{{ asset('assets/vendors/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\Division.js') }}"></script>
@endsection;