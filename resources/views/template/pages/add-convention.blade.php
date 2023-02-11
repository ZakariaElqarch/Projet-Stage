@extends('template.layouts.template');
@section('content');
@csrf


<div id="page-wrapper">
  <div class="container">

    <a href={{ route('index-convention') }}>
      <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    <h3 class="title1">Convention</h3>
  </div>
  <div class="form-three widget-shadow">
    <form class="form-horizontal">
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class="errortitre col-sm-8">
          <input type="text" name="titre" class="form-control1" id="focusedinput" placeholder="Titre">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Date de debut - fin:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control1" name="daterange" value ="" required  />
        </div>
      </div>
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Budget<span class="required"> *</span></label>
        <div class="errorbudget col-sm-8 ">
          <input type="text" name="budget" class="form-control1 budget" id="focusedinput" placeholder=" 6.575,45 DH">
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Liste de division:<span class="required">
            *</span></label>
        <div class="col-sm-8 errorDivision"><select name="SelectDivision" id="selector1" class="form-control1">
            <option value="">--Please choose an option--</option>
            <option value="division 1">division 1.</option>
            <option value="division 2">division 2</option>
            <option value="division 3.">division 3.</option>
            <option value="division 4.">division 4.</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Liste des service :<span class="required">
            *</span></label>
        <div class="col-sm-8 errorService"><select name="SelectService" id="selector1" class="form-control1">
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
        <div class="col-sm-8 errorPartenaire"><select name="SelectPartenaire" id="selector1" class="form-control1">
            <option value="">--Please choose an option--</option>
            <option value="Partenaire 1">Partenaire 1.</option>
            <option value="Partenaire 2">Partenaire 2</option>
            <option value="Partenaire 3">Partenaire 3.</option>
            <option value="Partenaire 4">Partenaire 4.</option>
          </select>
        </div>
      </div>
      <div class="col-sm-offset-2">
        <button type="button" class="sub btn btn-default add-btn">enregistere</button>
        <button type="reset" class="btn btn-default add-btn">Vider</button>

      </div>
      <div class="required"> * : Ces champs sont obligatoires</div>
    </form>
  </div>
</div>

@endsection;