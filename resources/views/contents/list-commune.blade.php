@extends('layouts.layout');

@section('content');

<div id="page-wrapper">

    <a href="{{ route('commune.create') }}">
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
                        @foreach ($communes as $commune)
                            
                        
                        <tr class="table-active">
                            <th scope="row">{{ $commune->id }}</th>
                            <td>{{ $commune->titre }}</td>
                            <td>{{ $commune->email }}</td>
                            <td>{{ $commune->tel }}</td>
                            <td class="d-flex">
                                <form action="{{ route('commune.destroy', $commune->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <a class="mx-1 action-btn" href="#"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette commune?')"></button>
                                </a>
                            </form>
                                <a class="mx-1 action-btn" href="{{ route('commune.edit',$commune->id) }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('commune.show', $commune->id) }}"><button
                                    class="btn bi bi-eye text-success action-btn"></button>
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
<link rel="stylesheet" href="{{ asset('assets\css\commune.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\commune.Validate.js') }}"></script>
@endsection