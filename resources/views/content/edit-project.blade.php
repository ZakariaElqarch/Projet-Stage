@extends('layouts.layout')

@section('content')

<!-- Form start Here -->
<h3 class="title1">Modifier Un Projet:</h3>
<a href={{ route('list-project') }} class="login-link col-sm-offset-9 ">
    <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
</a>
@if(session('status'))
    {{session('status')}}
@endif
<div class="form-three widget-shadow">
    <form class="form-horizontal" id="addProjectForm" action="{{ url('edit-project/'.$project->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Titre<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1" id="focusedinput" name="title" value="{{$project->title}}">
            </div>

        </div>
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Date Validation<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1" name="validationDate" id="validationDate" value="{{$project->validationDate}}">
            </div>
        </div>


        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Budget<span class="required"> *</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control1 budget" name="budget" value="{{$project->budget}}">
            </div>
        </div>



        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Convention<span class="required"> *</span></label>
            <div class="col-sm-8">
                <select name="convention" class="form-control1">
                    <option  value="" disabled>Select</option>
                    <option value="1" {{$project->convID == "1" ? 'selected' : ''}}>convention 1</option>
                    <option value="2" {{$project->convID == "2" ? 'selected' : ''}}>convention 2</option>
                    <option value="3" {{$project->convID == "3" ? 'selected' : ''}}>convention 3</option>
                    <option value="4" {{$project->convID == "4" ? 'selected' : ''}}>convention 4</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="selector1" class="col-sm-2 control-label">Phase<span class="required"> *</span></label>
            <div class="col-sm-8">
                <select name="phase" class="form-control1" id="phase">
                    <option  value="" disabled>Select</option>
                    <option value="initiale" {{$project->phase == "initiale" ? 'selected' : ''}}>Initiale</option>
                    <option value="execution" {{$project->phase == "execution" ? 'selected' : ''}}>Execution</option>
                    <option value="realise" {{$project->phase == "realise" ? 'selected' : ''}}>réalisé</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Taux d'avancement<span class="required"> *</span></label>
            <div class="col-sm-7">
                <input type="range" name="progress" class="form-range " min="0" max="100" id="advancementRange" value="{{$project->progress}}">
            </div>
            <span class="col-sm-1" id="advancementVal">{{$project->progress}}%</span>
        </div>




        <div class="col-md-offset-8 btn-div">
            <button type="reset" class="btn btn-primary costum-btn">Vider</button>
            <button type="submit" class="btn btn-primary costum-btn" id="enregister">Modifier</button>
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