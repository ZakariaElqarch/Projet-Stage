@extends('layouts.layout');
@section('content');
<link rel="stylesheet" href="{{ asset('assets/css/convention.css') }}">
<div id="page-wrapper">
  <a href="{{  route('convention.store')  }}" class=" login-link col-sm-offset-9"> <button
      class="btn btn-default add-btn ">Retour</button>
  </a>
  <h3 class="title1"><i class="bi bi-file-text nav_icon">Convention</i></h3>
  <div class="form-three widget-shadow">
    <form action="{{ route('convention.update',$conventions->id) }}" method="POST"
      class="form-horizontal Convention-form">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Titre</label>
        <div class="col-sm-8">
          <input type="text" name="title" class="form-control1" id="focusedinput" value="{{ $conventions->title }}"
            placeholder="Titre">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">Date Validation :</label>
        <div class="col-sm-8">
          <input type="text" name="validity" id="Validity" value="{{ $conventions->validity }}" class="form-control1">
        </div>
      </div>
      <div class="form-group">
        <label for="focusedinput" class="col-sm-3 control-label">Budget</label>
        <div class="col-sm-8">
          <input type="text" class="form-control1 budget" name="budget" id="Budget" value="{{$conventions->budget }}"
            id="focusedinput" placeholder="Budget">
        </div>
      </div>
      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">division:</label>
        <div class="col-sm-8"><select name="SelectDivision" id="SelectDivision" class="form-control1">
            @foreach ($divisions as $division )
            @if ( $division->id === $conventions->id_division )
            <option value="{{ $division->id }}" selected>{{ $division->title }}</option>
            @else
            <option value="{{ $division->id }}">{{ $division->title }}</option>
            @endif

            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Service:<span class="required">
            *</span></label>
        <div class="col-sm-8 errorService">
          <select name="SelectService" id="SelectService" data-live-search="true"
            data-url="{{ route('get-related-data', ':id') }}" class="form-control1">
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Partenaires:</label>
        <div class="col-sm-8"><select multiple name="SelectPartenaire[]" id="Partenaires" class="form-control1">



            @foreach ( $partenaires as $partenaire )
            @php $matched = false; @endphp
            @foreach ($partenaireSelected as $partenaireSE)
            @if($partenaire->id === $partenaireSE->id_partenaire)
            <option value="{{ $partenaire->id }}" selected>{{ $partenaire->title }}</option>
            @php $matched = true; @endphp
            @break
            @endif
            @endforeach
            @if (!$matched)
            <option value="{{ $partenaire->id }}">{{ $partenaire->title }}</option>
            @endif
            @endforeach






          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="selector1" class="col-sm-3 control-label">Communes:<span class="required"> *</span></label>
        <div class="col-sm-8 errorCommunes"><select multiple name="SelectCommunes[]" id="Communes"
            class="form-control1">
            @foreach ( $communes as $commune )
            @php $matched = false; @endphp
            @foreach ($communeSelected as $communeSE)
            @if($commune->id === $communeSE->id_commune)
            <option value="{{ $commune->id }}" selected>{{ $commune->title }}</option>
            @php $matched = true; @endphp
            @break
            @endif
            @endforeach
            @if (!$matched)
            <option value="{{ $commune->id }}">{{ $commune->title }}</option>
            @endif
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-offset-8 btn-div">
        <button type="submit" class="btn add-btn costum-btn" id="enregister">Mettre a Jour</button>
        <button type="reset" class="btn  add-btn costum-btn">Vider</button>

      </div>

    </form>

    <div class="required-msg">
      <span class="required"> (*) Champs Requis</span>
    </div>
  </div>
</div>
</div>

<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\convention.js') }}"></script>
<script src="{{ asset('assets\js\convention-Form.js') }}"></script>

@endsection