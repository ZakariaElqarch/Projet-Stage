@extends('layouts.layout')

@section('content')
<!-- Form start Here -->
<h3 class="title1">Ajouter Un Projet:</h3>

<div class="form-three widget-shadow">
    <form class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Titre<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1" id="focusedinput">
            </div>

        </div>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Date Debut<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="date" class="form-control1">
            </div>
        </div>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Date fin<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="date" class="form-control1">
            </div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Budget<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="number" class="form-control1" id="focusedinput">
            </div>
        </div>



        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Convention<span class="required"> *</span></label>
            <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                    <option>Lorem ipsum dolor sit amet.</option>
                    <option>Dolore, ab unde modi est!</option>
                    <option>Illum, fuga minus sit eaque.</option>
                    <option>Consequatur ducimus maiores voluptatum minima.</option>
                </select></div>
        </div>

        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Phase<span class="required"> *</span></label>
            <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                    <option>Initiale</option>
                    <option>Execution</option>
                    <option>réalisé</option>
                </select></div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Taux d'avancement<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1" id="projectProgress" min="0" max="100">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>
    
    <div class="required-msg">
        <span class="required"> (*) Champs Requis</span>
    </div>
</div>
<!-- Form end Here -->

@endsection