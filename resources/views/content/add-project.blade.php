@extends('layouts.layout')

@section('content')
<!-- Form start Here -->
<h3 class="title1">Ajouter Un Projet:</h3>
<a href={{ route('list-project') }} class="login-link col-sm-offset-9 ">
    <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
</a>
<div class="form-three widget-shadow">
    <form class="form-horizontal" id="addProjectForm">
        @csrf
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Titre<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1" id="focusedinput" name="title">
            </div>

        </div>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Date Validation<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1" name="validationDate">
            </div>
        </div>


        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Budget<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1 budget"  name="budget">
            </div>
        </div>



        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Convention<span class="required"> *</span></label>
            <div class="col-sm-8">
                <select name="convention" class="form-control1">
                <option selected value="" disabled>Sélectionnez</option>
                    <option>convention 1</option>
                    <option>convention 2</option>
                    <option>convention 3</option>
                    <option>convention 4</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Phase<span class="required"> *</span></label>
            <div class="col-sm-8">
                <select name="phase"  class="form-control1">
                <option selected value="" disabled>Sélectionnez</option>
                    <option>Initiale</option>
                    <option>Execution</option>
                    <option>réalisé</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Taux d'avancement<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1" id="projectProgress" name="projectProgress">
            </div>
        </div>
        <div class="col-md-offset-8 btn-div">
            <button type="reset" class="btn btn-primary costum-btn">Vider</button>
            <button type="submit" class="btn btn-primary costum-btn" id="enregister">Enregitrer</button>
            <!-- <input type="button"  class="btn btn-primary costum-btn" id="test"/>-->
            <input type="button"  class="btn btn-primary costum-btn" id="test2"/> 
        </div>
    </form>

    <div class="required-msg">
        <span class="required"> (*) Champs Requis</span>
    </div>
</div>
<!-- Form end Here -->

@endsection