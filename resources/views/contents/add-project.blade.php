@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/convention.css') }}">

<div id="page-wrapper">
    @if (session('error'))
    toastr.error({{ session('error') }});

@elseif (session('error'))
    toastr.success({{ session('success') }});
@endif
    
    <a href={{ route('project.store') }} >
        <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
    </a>
     <h3 class="title1"><i class="bi bi-journal-x nav_icon"> Projet</i></h3>



    <div class="form-three widget-shadow">
        <form class="form-horizontal" id="addProjectForm" action="{{ route('project.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Titre<span class="required"> *</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" name="title">
                </div>

            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Date Validation<span class="required">
                        *</span></label>
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
                        @foreach ($convention as $data )
                        <option value="{{ $data->id }}">{{ $data->title }}</option>
                        @endforeach
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
                        <option value="realise">Clôture</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Taux d'avancement<span class="required">
                        *</span></label>
                <div class="col-sm-7">
                    <input type="range" name="progress" class="form-range " min="0" max="100" id="advancementRange"
                        value="0">
                </div>
                <span class="col-sm-1" id="advancementVal">0%</span>
            </div>




            <div class="col-md-offset-8 btn-div">
                <button type="submit" class="btn btn-primary add-btn costum-btn" id="enregister">Enregitrer</button>
                <button type="reset" class="btn btn-primary  add-btn costum-btn">Vider</button>
             

            </div>
        </form>

        <div class="required-msg">
            <span class="required"> (*) Champs Requis</span>
        </div>
    </div>
</div>

<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\from.project.js') }}"></script>

    @endsection