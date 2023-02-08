@extends('template.layouts.template');

@section('content');
@csrf
<div id="page-wrapper">
    <div class="main-page">
        <div class="form-three widget-shadow">
            <h3 class="title1">Ajoutee un Projet :</h3>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-3 control-label">Titre</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Titre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="disabledinput" class="col-sm-3 control-label">Date début</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control1" placeholder="{{date('Y-m-d') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">Date de fin</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control1" id="inputPassword" placeholder="{{date('Y-m-d') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-3 control-label">Budget</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control1" id="focusedinput" placeholder="Budget">
                    </div>
                </div>
                <div class="form-group">
                    <label for="selector1" class="col-sm-3 control-label">Liste de convention:</label>
                    <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                            <option>convention 1.</option>
                            <option>convention 2</option>
                            <option>convention 3.</option>
                            <option>convention 4.</option>
                        </select></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-8">
                        <select class="form-control1">
                            <option>Status 1</option>
                            <option>Status 2</option>
                            <option>Status 3</option>
                            <option>Status 4</option>
                            <option>Status 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="radio" class="col-sm-3 control-label ">Taux d'avancement</label>
                    <div class="col-sm-9">
                        <div class="radio-inline"><label><input type="radio" name="avancement"
                                    value="avancement 1">avancement 1</label></div>
                        <div class="radio-inline"><label><input type="radio" name="avancement" value="avancement 2">
                                avancement 2</label></div>
                        <div class="radio-inline"><label><input type="radio" name="avancement"
                                    value="avancement 3">avancement 3</label></div>
                        <div class="radio-inline"><label><input type="radio" name="avancement"
                                    value="avancement 4">avancement 4</label></div>
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