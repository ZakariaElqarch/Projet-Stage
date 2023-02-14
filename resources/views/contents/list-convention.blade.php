@extends('layouts.layout');

@section('content');

<div id="page-wrapper">

    <a href={{ route('add-convention') }}>
        <button class="btn add-btn flex">Ajouter Une Convention</button>
    </a>
    <h3 class="title1">Convention</h3>
    <div class="main-page">



        <div id="ConventionTable">

            <div class="panel-body widget-shadow">
                <table class="table" id="ConventionTable">
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
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
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
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Convention 3</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Convention 4</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Convention 5</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Convention 6</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Convention 7</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Convention 8</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Convention 9</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Convention 10</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Convention 11</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Convention 12</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>Convention13</td>
                            <td>{{ date('Y-m-d') }} - {{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1, 10) }}</td>
                            <td>Devision 2</td>
                            <td>Service 3</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\convention.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\convention.js') }}"></script>
@endsection