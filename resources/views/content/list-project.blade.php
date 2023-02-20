@extends('layouts.layout')

@section('content')

<div class="tables">
    <h3 class="title1">Projets</h3>
    <a href={{ route('add-project') }} class="login-link col-sm-offset-9 ">
        <button name="Sign In" value="Sign In" class="btn btn-default add-btn ">Ajouter Un Projet</button>
    </a>
    <div class="panel-body widget-shadow">

        <table class="centerTable" id="projectTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Date Validité</th>
                    <th>Taux d'avancement </th>
                    <th>Convention </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($project as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->title}}</td>
                    <td>{{$data->validationDate}}</td>
                    <td>
                        <div class="progress progress-striped active">
                            <div class="bar  blue" style="width:{{$data->progress}}%"></div>
                        </div><span class="pull-right">{{$data->progress}}%</span>
                    </td>
                    <td>{{$data->convID}}</td>
                    <td class="d-flex">
                        <a class="mx-1" href="{{ route('show-project',$data->id) }}">
                            <button class="btn fa fa-eye text-success"></button>
                        </a>
                        <a class="mx-1" href="{{ route('edit-project',$data->id)}}">
                            <button class="btn fa fa-edit text-primary"></button>
                        </a>
                        <a class="mx-1"  href="{{ route('delete-project',$data->id)}}" class="btn fa fa-trash-o text-danger">
                            <button class="btn fa fa-trash-o text-danger" ></button>
                        </a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</div>
@endsection