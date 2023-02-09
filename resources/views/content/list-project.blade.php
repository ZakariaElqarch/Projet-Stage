@extends('layouts.layout')

@section('content')

<div class="tables">
    <h3 class="title1">Projets</h3>
    <a href={{ route('add-project') }} class="login-link col-sm-offset-9 ">
        <button name="Sign In" value="Sign In" class="btn btn-default add-btn ">Ajouter Un Projet</button>
    </a>
    <div class="panel-body widget-shadow">

        <table class="table">
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
                <tr>
                    <th scope="row">1</th>
                    <td>Projet 1</td>
                    <td>10/12/2022 - 23/10/2023</td>
                    <td>
                        <div class="progress progress-striped active">
                            <div class="bar  blue" style="width: 80%;"></div>
                        </div><span class="pull-right">80% </span>
                    </td>
                    <td>Conv 1</td>
                    <td class="d-flex">
                        <a class="mx-1" href="{{ route('list-project') }}"><button class="btn fa fa-eye text-success">
                            </button></a>
                        <a class="mx-1" href="#"><button class="btn fa fa-edit text-primary"></button></a>
                        <a class="mx-1" href="#"><button class="btn fa fa-trash-o text-danger" onclick="return confirm('Etes-vous sûr de supprimer ce client?')"></button>
                        </a>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Projet 2</td>
                    <td>10/12/2022 - 23/10/2023</td>
                    <td>
                        <div class="progress progress-striped active">
                            <div class="bar  blue" style="width: 40%;"></div>
                        </div><span class="pull-right">40% </span>
                    </td>
                    <td>Conv 1</td>
                    <td class="d-flex">
                        <a class="mx-1" href="{{ route('list-project') }}"><button class="btn fa fa-eye text-success">
                            </button></a>
                        <a class="mx-1" href="#"><button class="btn fa fa-edit text-primary"></button></a>
                        <a class="mx-1" href="#"><button class="btn fa fa-trash-o text-danger" onclick="return confirm('Etes-vous sûr de supprimer ce client?')"></button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Projet 3</td>
                    <td>10/12/2022 - 23/10/2023</td>
                    <td>
                        <div class="progress progress-striped active">
                            <div class="bar  blue" style="width: 100%;"></div>
                        </div><span class="pull-right">100% </span>
                    </td>
                    <td>Conv 2</td>
                    <td class="d-flex">
                        <a class="mx-1" href="{{ route('list-project') }}"><button class="btn fa fa-eye text-success">
                            </button></a>
                        <a class="mx-1" href="#"><button class="btn fa fa-edit text-primary"></button></a>
                        <a class="mx-1" href="#"><button class="btn fa fa-trash-o text-danger" onclick="return confirm('Etes-vous sûr de supprimer ce client?')"></button>
                        </a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>


</div>
@endsection