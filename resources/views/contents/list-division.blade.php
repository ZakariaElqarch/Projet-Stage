@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\division.css') }}">
<div id="page-wrapper">

    <a href={{ route('division.create') }}>
        <button class="btn add-btn flex">Ajouter Une Division</button>
    </a>
    <h3 class="title1"><i class="bi bi-building nav_icon"> Division</i></h3>
    <div class="main-page">



        <div >

            <div class="panel-body widget-shadow">
            <table class="table" id="DivisionTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>                          
                            <th>Chef </th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Alldivisions as $division)
                            <tr class="table-active">
                            <th  scope="row">{{$division->id}}</th>
                            <td> {{$division->title}}</td>
                            <td> {{$division->chef}}</td>
                            <td> {{$division->email}}</td>
                            <td> {{$division->phone}}</td>
                            <td class="d-flex">
                                <form action="{{ route('division.destroy',$division->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a class="mx-1 action-btn"><button
                                    class="btn bi bi-trash3 text-danger action-btn"
                                    onclick="return confirm('Etes-vous sûr de supprimer cette division?')"></button>
                                </a>
                                </form>
                               

                                <a class="mx-1 action-btn" href="{{ route('division.edit',$division->id) }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('division.show',$division->id) }}"><button
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

<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\division.js') }}"></script>
@endsection