@extends('layouts.layout');

@section('content');

<div id="page-wrapper">

    <a href={{ route('service.create') }}>
        <button class="btn add-btn flex">Ajouter Un Service</button>
    </a>
    <h3 class="title1"><i class="bi bi-house-gear nav_icon"> Service</i></h3>
    <div class="main-page">
        <div >
            <div class="panel-body widget-shadow">
            <table class="table" id="ServiceTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th> 
                            <th>Chef de Service</th>
                            <th>Division</th>
                            <th>Tel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <th scope="row">{{ $service->id }}</th>
                            <td> {{ $service->title }}</td>
                            <td>{{ $service->chef }}</td>
                            <td>{{ $service->email }}</td>
                            <td>{{ $service->phone }}</td>
                            <td class="d-flex">
                                <form action="{{ route('service.destroy',$service->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                    <a class="mx-1 action-btn"><button
                                        class="btn bi bi-trash3 text-danger action-btn"
                                        onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                    </a>
                                </form>
                                <a class="mx-1 action-btn" href="{{ route('service.edit',$service->id) }}"><button
                                    class="btn bi bi-pencil-square text-primary action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('service.show',$service->id) }}"><button
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
<link rel="stylesheet" href="{{ asset('assets\css\service.css') }}">
<script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets\js\service.js') }}"></script>
@endsection