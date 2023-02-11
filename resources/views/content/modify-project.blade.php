@extends('layouts.layout')

@section('content')
<!-- Form start Here -->
<h3 class="title1">Modifier Le Projet:</h3>
<a href={{ route('list-project') }} class="login-link col-sm-offset-9 ">
    <button name="Sign In" value="Sign In" class="btn btn-default add-btn ">Retour</button>
</a>
<div class="form-three widget-shadow">
    <form class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Titre<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" value="Projet 1" class="form-control1" id="focusedinput">
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
                <input type="text" value="10000dh" value="Projet 1" class="budget form-control1" id="focusedinput">
            </div>
        </div>



        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Convention<span class="required"> *</span></label>
            <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                    <option selected>convention 1</option>
                    <option>convention 2</option>
                    <option>convention 3</option>
                    <option>convention 4</option>
                </select></div>
        </div>

        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Phase<span class="required"> *</span></label>
            <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                    <option>Initiale</option>
                    <option selected>Execution</option>
                    <option>réalisé</option>
                </select></div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Taux d'avancement<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" value="80%" class="form-control1" id="projectProgress" min="0" max="100">
            </div>
        </div>
        <button type="submit" class="btn btn-primary costum-btn">Modify</button>
        <button type="reset" class="btn btn-primary costum-btn">Vider</button>

    </form>

    <div class="required-msg">
        <span class="required"> (*) Champs Requis</span>
    </div>
</div>
<!-- Form end Here -->

@endsection