@extends('layouts.layout');
@section('content');
@csrf
<div id="page-wrapper">
  <a href="{{ route('list-convention') }}" class=" login-link col-sm-offset-9"> <button class="btn btn-default add-btn ">Retour</button>
  </a>
  <h3 class="title1">Convention</h3>
  <div class="form-three widget-shadow">
    <form class="form-horizontal Convention-form">
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre</label>
        <div class="col-sm-8">
          <input type="text" name="titre" class="form-control1" id="focusedinput" value="convention 1" placeholder="Titre">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Date debut / fin :</label>
        <div class="col-sm-8">
          <input type="text" name="Validity" id="Validity" class="form-control1">
        </div>
      </div>
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Budget</label>
        <div class="col-sm-8">
          <input type="text" class="form-control1 budget" name="budget" id="Budget" value="{{ random_int(100000,10000000) }}"
            id="focusedinput" placeholder="Budget">
        </div>
      </div>
      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Les division:</label>
        <div class="col-sm-8"><select name="SelectDivision" id="division" class="form-control1">
            <option>division 1.</option>
            <option>division 2</option>
            <option>division 3.</option>
            <option>division 4.</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Les service :</label>
        <div class="col-sm-8"><select  name="SelectService" id="service" class="form-control1">
            <option>service 1.</option>
            <option>service 2</option>
            <option>service 3.</option>
            <option>service 4.</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Les Partenaires:</label>
        <div class="col-sm-8"><select name="SelectPartenaire" id="Partenaires" class="form-control1">
            <option>Partenaire 1.</option>
            <option>Partenaire 2</option>
            <option>Partenaire 3.</option>
            <option>Partenaire 4.</option>
          </select>
        </div>
      </div>
      <div>
        <button type="submit" class="btn btn-default add-btn update_btn" value="enregistere">Mettre a jour</button>
      </div>
      <div class="required"> </div>
    </form>
  </div>
</div>
</div>
<link rel="stylesheet" href="{{ asset('assets/css/convention.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\convention.js') }}"></script>

@endsection;