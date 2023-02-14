@extends('layouts.layout');

@section('content');

<div id="page-wrapper">

    <a href="{{ route('add-commune') }}">
        <button class="btn add-btn flex">Ajouter Une Commune</button>
    </a>
    <h3 class="title1">Commune</h3>
    <div class="main-page">



        <div id="Partenaire">

            <div class="panel-body widget-shadow">
                <table class="table" id="CommuneTable">
                    <thead>
                        <tr class="table-active">
                            <th>#</th>
                            <th scope="col" class="Item">Titre</th>
                            <th scope="col" class="Item">Email</th>
                            <th scope="col" class="Item">N Tel</th>
                            <th scope="col" class="Item">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-active">
                            <th scope="row">1</th>
                            <td>Commune 1</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">2</th>
                            <td>Commune2</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">3</th>
                            <td>Commune 3</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">4</th>
                            <td>Commune 4</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">5</th>
                            <td>Commune 5</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">6</th>
                            <td>Commune 6</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">7</th>
                            <td>Commune 7</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">8</th>
                            <td>Commune 8</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">9</th>
                            <td>Commune 9</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">10</th>
                            <td>Commune 10</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">11</th>
                            <td>Commune 11 </td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">12</th>
                            <td>Commune 12</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-commune') }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr class="table-active">
                            <th scope="row">13</th>
                            <td>Commune 13</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-commune') }}"><button
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
<link rel="stylesheet" href="{{ asset('assets\css\commune.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\commune.Validate.js') }}"></script>
@endsection