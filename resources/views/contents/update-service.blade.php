@extends('layouts.layout');
@section('content');
@csrf


<div id="page-wrapper">
 

    <a href={{ route('service.store') }}>
      <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1">Services:</h3>
  
  <div class="form-three widget-shadow">
    <form action="{{ route('service.update',$services->id) }}" method="POST" class="form-horizontal service-form">
@csrf
@method('PUT')
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="title" class="form-control1" placeholder="Titre" value="{{ $services->title }}">
        </div>
      </div>

	  <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Chef de service<span class="required"> *</span></label>
        <div class=" col-sm-8">
          <input type="text" name="chef" class="form-control1" placeholder="Titre" value="{{ $services->chef }}">
        </div>
      </div>

	  <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Division<span class="required"> *</span></label>
        <div class=" col-sm-8">
		<select name="selectdivision" id="division" class="form-control1">
      <option value="">--choose option--</option>
         @foreach ($divisions as $division )
         <option value="{{  $division->id }}">{{  $division->title }}</option>
         @endforeach
	   </select>
        </div>
      </div>


      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">e-mail<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="email" name="mail" class="form-control1" placeholder="e-mail" value="{{ $services->email }}">
        </div>
      </div>

      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">N-tel<span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="tel" name="phone"  class="form-control1 phone" placeholder="tel" value="{{ $services->phone }}">
        </div>
      </div>
      <div class="col-md-offset-8 btn-div">
        <button type="submit" class="btn add-btn costum-btn" id="enregister">Mettre a Jour</button>
        <button type="reset" class="btn  add-btn costum-btn">Vider</button>
        
    </div>
      <div class="required"> * : Ces champs sont obligatoires</div>
    </form>
  </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\service.css') }}">
<script src="{{ asset('assets/vendors/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\service.js') }}"></script>
@endsection;