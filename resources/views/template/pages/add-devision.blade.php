@extends('template.layouts.template');

@section('content');
@csrf
<div id="page-wrapper">
    <div class="main-page">
        <div class="form-three widget-shadow">
            <h3 class="title1">Ajoutee une Devision :</h3>
            <div class="form-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Le Nom de Devision </label>
                        <div class="col-sm-8"> <input type="text" class="form-control" placeholder="Le Nom de Devision">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="selector1" class="col-sm-3 control-label">Liste des service :</label>
                        <div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
                                <option>service 1.</option>
                                <option>service 2.</option>
                                <option>service 3.</option>
                                <option>service 4.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Envoyer</button> </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection