@extends('layouts.layout');
@section('content');



<div id="page-wrapper">
 

    <a href={{ route('service.store') }}>
      <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1">Division</h3>
  
  <div class="form-three widget-shadow">
    <form action="{{  route('division.update',$divisions->id)}}" method="POST" class="form-horizontal division-form">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="title" class="form-control1"  placeholder="Titre" value="{{ $divisions->title }}">
        </div>
      </div>

	  <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Chef de division<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="chef" class="form-control1"  placeholder="Titre" value="{{ $divisions->chef }}">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">e-mail<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="email" name="mail" class="form-control1" placeholder="e-mail" value="{{ $divisions->email }}">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">N-tel<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="tel" name="phone"  class="form-control1 phone" placeholder="phone" value="{{ $divisions->phone }}">
        </div>
      </div>
      <div class="col-sm-offset-2">
        <button type="submit" class="sub btn btn-default add-btn">enregistere</button>

      </div>
      <div class="required"> * : Ces champs sont obligatoires</div>
    </form>
  </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\Division.css') }}">
<script src="{{ asset('assets/vendors/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\Division.js') }}"></script>
@endsection;