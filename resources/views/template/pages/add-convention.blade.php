@extends('template.layouts.template');
@section('content');
@csrf
<div id="page-wrapper">
  <div class="main-page">
    <div class="form-three widget-shadow">
      <h3 class="title1">Ajoutee une Convention :</h3>
      <form class="form-horizontal">
        <div class="form-group">
          <label for="focusedinput" class="col-sm-3 control-label">Titre</label>
          <div class="col-sm-8">
            <input type="text" class="form-control1" id="focusedinput" placeholder="Titre">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Date de début:</label>
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
          <label for="focusedinput" class="col-sm-3 control-label">Budget</label>
          <div class="col-sm-8">
              <input type="number" class="form-control1" id="focusedinput" placeholder="Budget">
          </div>
      </div>

        <div class="form-group">
          <label for="selector1" class="col-sm-3 control-label">Liste de division:</label>
          <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
              <option>division 1.</option>
              <option>division 2</option>
              <option>division 3.</option>
              <option>division 4.</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="selector1" class="col-sm-3 control-label">Liste des service :</label>
          <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
              <option>service 1.</option>
              <option>service 2</option>
              <option>service 3.</option>
              <option>service 4.</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="txtarea1" class="col-sm-3 control-label">Les associés:</label>
          <div class="col-sm-8"><textarea name="txtarea1" id="txtarea1"
              placeholder="saisie chaque assoscier dans un ligne" cols="50" rows="10" class="form-control1"></textarea>
          </div>
        </div>

        <div class="col-sm-offset-2">
          <button type="submit" class="btn btn-default">Envoyer</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection;