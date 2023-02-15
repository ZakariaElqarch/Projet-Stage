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
                <input type="text" class="form-control1" name="validationDate" id="validationDate">
            </div>
        </div>


        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Budget<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1 budget" name="budget">
            </div>
        </div>



        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Convention<span class="required"> *</span></label>
            <div class="col-sm-8">
                <select name="convention" class="form-control1">
                    <option selected value="" disabled>Select</option>
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
                <select name="phase" class="form-control1" id="phase">
                    <option selected value="" disabled>Select</option>
                    <option value="initiale">Initiale</option>
                    <option value="execution">Execution</option>
                    <option value="realise">réalisé</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Taux d'avancement<span class="required"> *</span></label>
            <div class="col-sm-7">
                <input type="range" class="form-range " min="0" max="100" id="advancementRange" value=0>
            </div>
            <span class="col-sm-1" id="advancementVal">0%</span>
        </div>




        <div class="col-md-offset-8 btn-div">
            <button type="reset" class="btn btn-primary costum-btn">Vider</button>
            <button type="submit" class="btn btn-primary costum-btn" id="enregister">Enregitrer</button>
            <!-- <input type="button" class="btn btn-primary costum-btn" id="test" /> -->
            <!-- <input type="button"  class="btn btn-primary costum-btn" id="test2"/>  -->
        </div>
    </form>

    <div class="required-msg">
        <span class="required"> (*) Champs Requis</span>
    </div>
</div>
<!-- Form end Here -->

@endsection