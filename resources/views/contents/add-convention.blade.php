@extends('layouts.layout');
@section('content');
@csrf


<div id="page-wrapper">

  <a href={{ route('convention.store') }}>
    <button name="Sign In" class="btn btn-default add-btn ">Retour</button>
  </a>



  <h3 class="title1">Convention</h3>

  <div class="form-three widget-shadow">
    <form action="{{ route('convention.store') }}" method="POST" class="form-horizontal Convention-form">
      @csrf
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre<span class="required"> *</span></label>
        <div class="errortitre col-sm-8">
          <input type="text" name="title" class="form-control1" id="Titre" placeholder="Titre">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Date de debut - fin: <span class="required"> *</span></label>
        <div class="col-sm-8">
          <input type="text" class="form-control1" name="validity" id="Validity" placeholder="date de validiter" />
        </div>
      </div>
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Budget<span class="required"> *</span></label>
        <div class="errorbudget col-sm-8 ">
          <input type="text" name="budget" class="form-control1 budget" id="Budget" placeholder=" 6.575,45 DH">
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Division:<span class="required">
            *</span></label>
        <div class="col-sm-8 errorDivision"><select name="SelectDivision" id="SelectDivision" class="form-control1">
            @foreach ($divisions as $division )


            <option value="{{ $division->id }}">{{ $division->title }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Service :<span class="required">
            *</span></label>
        <div class="col-sm-8 errorService">
          <select name="SelectService" id="SelectService"
           data-live-search="true" data-url="{{ route('get-related-data', ':id') }}"
           class="form-control1">
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Les Partenaires:<span class="required"> *</span></label>
        <div class="col-sm-8 errorPartenaire"><select multiple name="SelectPartenaire[]" id="SelectPartenaire"
            class="form-control1">
            @foreach ($partenaires as $partenaire)
            <option value="{{ $partenaire->id}}">{{ $partenaire->title }} </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Les Communes:<span class="required"> *</span></label>
        <div class="col-sm-8 errorCommunes"><select multiple name="SelectCommunes[]" id="Communes"
            class="form-control1">
            @foreach ( $communes as $commune )
            <option value="{{ $commune->id }}">{{ $commune->title }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-sm-offset-2">
        <button type="submit" class="btn btn-default add-btn" value="enregistere">Enregistere</button>
        <button type="reset" class="btn btn-default add-btn">Vider</button>

      </div>
      <div class="required"> * : Ces champs sont obligatoires</div>
    </form>
  </div>
</div>
<link rel="stylesheet" href="{{ asset('assets/css/convention.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\convention-Form.js') }}"></script>
<script src="{{ asset('assets\js\convention.js') }}"></script>

<script>






</script>


@endsection