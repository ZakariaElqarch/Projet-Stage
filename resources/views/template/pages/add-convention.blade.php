@extends('template.layouts.template');
@section('content');
@csrf
<div id="page-wrapper">
  <h3 class="title1">Convention</h3>
  <div class="main-page">
    <div class="col-sm-offset-7">
      <a href="{{ route('index-convention') }}" class=" login-link col-sm-offset-9"> <button name="Sign In"
          value="Sign In" class="btn btn-default add-btn ">Retour</button></a>
    </div>
    <div class="form-three widget-shadow">


      <form class="form-horizontal">
        <div class="form-group">
          <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
          <div class="col-sm-8">
            <input type="text" class="form-control1" id="focusedinput" placeholder="Titre">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Date de debut:</label>
          <div class="col-sm-8">
            <input type="date" class="form-control1" placeholder="{{ date('Y-m-d') }}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Date de fin:</label>
          <div class="col-sm-8">
            <input type="date" class="form-control1" placeholder="{{ date('Y-m-d') }}">
          </div>
        </div>
        <div class="form-group">
          <label for="focusedinput" class="col-sm-3 control-label">Budget<span class="required"> *</span></label>
          <div class="col-sm-8">
            <input type="text" class="form-control1 budget" id="focusedinput" placeholder="">
          </div>
        </div>

        <div class="form-group">
          <label for="selector1" class="col-sm-3 control-label">Liste de division:<span class="required">
              *</span></label>
          <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
              <option>division 1.</option>
              <option>division 2</option>
              <option>division 3.</option>
              <option>division 4.</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="selector1" class="col-sm-3 control-label">Liste des service :<span class="required">
              *</span></label>
          <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
              <option>service 1.</option>
              <option>service 2</option>
              <option>service 3.</option>
              <option>service 4.</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="selector1" class="col-sm-3 control-label">Les Partenaires:<span class="required"> *</span></label>
          <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
              <option>Partenaire 1.</option>
              <option>Partenaire 2</option>
              <option>Partenaire 3.</option>
              <option>Partenaire 4.</option>
            </select>
          </div>
        </div>
        <div class="col-sm-offset-2">
          <button type="submit" class="btn btn-default">enregistere</button>
          <button type="reset" class="btn btn-default">Annuler</button>

        </div>
        <div class=" required"> * : Ces champs sont obligatoires</div>
      </form>
    </div>
  </div>
</div>
@endsection;