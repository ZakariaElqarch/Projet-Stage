@extends('layouts.layout');
@section('content');
@csrf


<div id="page-wrapper">

    <a href={{ route('list-convention') }}>
      <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1">Convention</h3>

  <div class="form-three widget-shadow">
    <form class="form-horizontal Convention-form">
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class="errortitre col-sm-8">
          <input type="text" name="titre" class="form-control1" id="Titre" placeholder="Titre">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Date de debut - fin: <span class="required"> *</span></label>
        <div class="col-sm-8"> 
          <input type="text" class="form-control1" name="Validity" id="Validity" placeholder="date de validiter" value="" />
        </div>
      </div>
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Budget<span class="required"> *</span></label>
        <div class="errorbudget col-sm-8 ">
          <input type="text" name="budget" class="form-control1 budget" id="Budget" placeholder=" 6.575,45 DH">
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Division:<span class="required">
            *</span></label>
        <div class="col-sm-8 errorDivision"><select name="SelectDivision" id="division" class="form-control1">
            <option value="">--Please choose an option--</option>
            <option value="division 1">division 1.</option>
            <option value="division 2">division 2</option>
            <option value="division 3.">division 3.</option>
            <option value="division 4.">division 4.</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">S ervice :<span class="required">
            *</span></label>
        <div class="col-sm-8 errorService"><select name="SelectService" id="service" class="form-control1">
            <option value="">--Please choose an option--</option>
            <option value="service 1.">service 1.</option>
            <option value="service 2">service 2</option>
            <option value="service 3">service 3.</option>
            <option value="service 4">service 4.</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Les Partenaires:<span class="required"> *</span></label>
        <div class="col-sm-8 errorPartenaire"><select name="SelectPartenaire" id="Partenaires" class="form-control1">
            <option value="">--Please choose an option--</option>
            <option value="Partenaire 1">Partenaire 1.</option>
            <option value="Partenaire 2">Partenaire 2</option>
            <option value="Partenaire 3">Partenaire 3.</option>
            <option value="Partenaire 4">Partenaire 4.</option>
          </select>
        </div>
      </div>
      <div class="col-sm-offset-2">
        <button type="submit" class="btn btn-default add-btn" value="enregistere">Enregistere</button>
        <button type="reset" class="btn btn-default add-btn">Vider</button>

      </div>
      <div class="required"> * : Ces champs sont obligatoires</div>
    </form>
  </div>
</div>
<link rel="stylesheet" href="{{ asset('assets/css/convention.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\convention.js') }}"></script>
@endsection;