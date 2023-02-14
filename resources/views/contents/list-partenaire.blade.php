@extends('layouts.layout');

@section('content');

<div id="page-wrapper">

    <a href={{ route('add-partenaire') }}>
        <button class="btn add-btn flex">Ajouter Un Partenaire</button>
    </a>
    <h3 class="title1">Partenaire</h3>
    <div class="main-page">



        <div id="Partenaire">

            <div class="panel-body widget-shadow">
                <table class="table" id="PartenaireTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Email</th>
                            <th>N Tel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Partenaire1</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Partenaire 2</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Partenaire 3</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Partenaire 4</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Partenaire 5</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Partenaire 6</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Partenaire 7</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Partenaire 8</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Partenaire 9</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Partenaire 10</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Partenaire 11 </td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button class="btn bi bi-trash3  action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Partenaire 12</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye-fill  action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td>Partenaire 13</td>
                            <td>test@gmail.com</td>
                            <td>05.23.45.67.89</td>
                            <td class="d-flex">
                                <a class="mx-1 action-btn" href="#"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                </a>

                                <a class="mx-1 action-btn" href="{{ route('update-partenaire') }}"><button
                                        class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('show-partenaire') }}"><button
                                        class="btn bi bi-eye  action-btn"></button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('assets\css\partenaire.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\partenaire.Validate.js') }}"></script>
@endsection