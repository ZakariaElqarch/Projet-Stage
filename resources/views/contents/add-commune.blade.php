@extends('layouts.layout');
@section('content');



<div id="page-wrapper">
 

    <a href={{ route('commune.store') }}>
      <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1"><i class="bi bi-buildings nav_icon"> Commune</i></h3>
  
  <div class="form-three widget-shadow">
    <form action="{{ route('commune.store') }}" method="POST" class="form-horizontal commune-form">
      @csrf
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="title" class="form-control1"  placeholder="Titre">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">E-mail<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="email" name="mail" class="form-control1" placeholder="E-mail">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">N-tel<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="tel" name="phone" class="form-control1" placeholder="Tel">
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
<link rel="stylesheet" href="{{ asset('assets\css\commune.css') }}">
<script src="{{ asset('assets/vendors/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\commune.Validate.js') }}"></script>
@endsection