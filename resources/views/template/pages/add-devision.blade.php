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
                        <label for="txtarea1" class="col-sm-3 control-label">les nom des Services</label>
                        <div class="col-sm-8"><textarea name="txtarea1" id="txtarea1"
                            placeholder="saisie chaque service dans un ligne" cols="50" rows="10" class="form-control1"></textarea>
                        </div>
                      </div>
                    <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Envoyer</button> </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection