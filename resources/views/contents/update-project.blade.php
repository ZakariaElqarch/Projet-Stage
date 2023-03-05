@extends('layouts.layout')

@section('content')
<div id="page-wrapper">
    <!-- Form start Here -->
    <h3 class="title1">Modifier Un Projet:</h3>
    <a href={{ route('project.store') }} class="login-link col-sm-offset-9 ">
        <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
    @if(session('status'))
    {{session('status')}}
    @endif
    <div class="form-three widget-shadow">
        <form action="{{ route('project.update',$project->id) }}" method="POST"  class="form-horizontal" id="addProjectForm" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Titre<span class="required"> *</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" name="title" value="{{$project->title}}">
                </div>

            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Date Validation<span class="required">
                        *</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" name="validationDate" id="validationDate"
                        value="{{$project->validity}}">
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
                        <option value="" disabled>Select</option>
                        @foreach ($convention as $data )
                        <option value="{{ $data->id }}" {{$project->convention_id == $data->id ? 'selected' : ''}}>{{
                            $data->title }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="selector1" class="col-sm-2 control-label">Phase<span class="required"> *</span></label>
                <div class="col-sm-8">
                    <select name="phase" class="form-control1" id="phase">
                        <option value="" disabled>Select</option>
                        <option value="initiale" {{$project->phase == "initiale" ? 'selected' : ''}}>Initiale</option>
                        <option value="execution" {{$project->phase == "execution" ? 'selected' : ''}}>Execution
                        </option>
                        <option value="realise" {{$project->phase == "realise" ? 'selected' : ''}}>réalisé</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Taux d'avancement<span class="required">
                        *</span></label>
                <div class="col-sm-7">
                    <input type="range" name="progress" class="form-range " min="0" max="100" id="advancementRange"
                        value="{{$project->progress}}">
                    <input type="hidden" name="progressVal" id="progressVal">
                </div>
                <span class="col-sm-1" id="advancementVal">{{$project->progress}}%</span>
            </div>




            <div class="col-md-offset-8 btn-div">
                <button type="reset" class="btn  add-btn costum-btn">Vider</button>
                <button type="submit" class="btn add-btn costum-btn" id="enregister">Mettre a Jour</button>
            </div>
        </form>

        <div class="required-msg">
            <span class="required"> (*) Champs Requis</span>
        </div>
    </div>
    <!-- Form end Here -->
</div>
<link rel="stylesheet" href="{{ asset('assets/css/convention.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\from.project.js') }}"></script>
@endsection