@extends('template.layouts.template');

@section('content');

<div id="page-wrapper">

    <a href={{ route('convention') }}>
        <button class="btn add-btn flex">Ajouter Un Projet</button>
    </a>
    <h3 class="title1">Convention</h3>
    <div class="main-page">



        <div class="tables">

            <div class="panel-body widget-shadow">
                <table class="table" data-page-length='5'>
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn ">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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
                                <a class="mx-1 action-btn" href="{{ route('show-convention') }}"><button
                                        class="btn bi bi-eye text-success action-btn">
                                    </button></a>
                                <a class="mx-1 action-btn" href="{{ route('update-convention') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
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