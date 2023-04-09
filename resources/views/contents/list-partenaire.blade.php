@extends('layouts.layout');

@section('content');

<div id="page-wrapper">

        <a href={{ route('partenaire.create') }}>
                <button class="btn add-btn flex">Ajouter Un Partenaire</button>
        </a>
        <h3 class="title1"><i class="bi bi-people-fill nav_icon"> Partenaire</i></h3>
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
                                                @foreach ($partenaires as $partenaire )

                                              
                                                <tr>
                                                        <th scope="row">{{ $partenaire->id }}</th>
                                                        <td>{{ $partenaire->title }}</td>
                                                        <td>{{ $partenaire->email }}</td>
                                                        <td>{{ $partenaire->phone }}</td>
                                                        <td class="d-flex">
                                                                <form action="{{route('partenaire.destroy',$partenaire->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <a class="mx-1 action-btn"><button
                                                                                class="btn bi bi-trash3  action-btn"
                                                                                onclick="return confirm('Etes-vous sûr de supprimer ce partenaire?')"></button>
                                                                        </a>
                                                                </form>
                                                                <a class="mx-1 action-btn"
                                                                        href="{{ route('partenaire.edit',$partenaire->id) }}"><button
                                                                                class="btn bi bi-pencil-square  action-btn"></button></a>

                                                                <a class="mx-1 action-btn"
                                                                        href="{{ route('partenaire.show',$partenaire->id) }}"><button
                                                                                class="btn bi bi-eye-fill  action-btn"></button>
                                                                </a>

                                                        </td>
                                                </tr>
                                                @endforeach
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