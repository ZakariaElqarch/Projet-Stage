@extends('template.layouts.template');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <h3 class="title1">Convention</h3>
        <div class="tables">
            <a href={{ route('convention') }} class="login-link col-sm-offset-9 ">
                <button name="Sign In" value="Sign In" class="btn btn-default add-btn ">Ajouter Un Projet</button>
            </a>
            <div class="panel-body widget-shadow">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Date de début - fin</th>
                            <th>Nomber des projets</th>
                            <th>Division</th>
                            <th>Service</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Convention 1</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 1</td>
                            <td>Service 1</td>
                            <td class="d-flex">
                                <a class="mx-1" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success">
                                    </button></a>
                                <a class="mx-1" href="{{ route('update-convention') }}"><button
                                        class="btn fa fa-edit text-primary"></button></a>

                                <a class="mx-1" href="#"><button class="btn bi bi-trash3 text-danger"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce client?')"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Convention 2</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success">
                                    </button></a>
                                <a class="mx-1" href="{{ route('update-convention') }}"><button
                                        class="btn fa fa-edit text-primary"></button></a>

                                <a class="mx-1" href="#"><button class="btn bi bi-trash3 text-danger"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce client?')"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Convention 3</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 2</td>
                            <td>Service 3</td>
                            <td class="d-flex">
                                <a class="mx-1" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success">
                                    </button></a>
                                <a class="mx-1" href="{{ route('update-convention') }}"><button
                                        class="btn fa fa-edit text-primary"></button></a>

                                <a class="mx-1" href="#"><button class="btn bi bi-trash3 text-danger"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce client?')"></button>
                                </a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection