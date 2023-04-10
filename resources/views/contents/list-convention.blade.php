@extends('layouts.layout');

@section('content');
<link rel="stylesheet" href="{{ asset('assets\css\convention.css') }}">
<div id="page-wrapper">
    <a href={{ route('convention.create') }}>
        <button class="btn flex add-btn ">Ajouter Une Convention</button>
    </a>
    <h3 class="title1"><i class="bi bi-file-text nav_icon">Convention</i></h3>
    <div class="main-page">
        <div id="ConventionTable">
            <div class="panel-body widget-shadow">
                @if(session('success'))
                toastr.success('{{ session('success') }}');
            @endif
                <table class="table" id="ConventionTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Date Validité</th>
                            <th>Nomber des projets</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($conventions as $convention)
                        <tr>
                            <th scope="row">{{ $convention->id }}</th>
                            <td>{{ $convention->title }}</td>
                            <td>{{ $convention->validity}}</td>
                           
                           
                            <td>{{ DB::table('projects')
                                ->where('convention_id', '=', $convention->id)
                                ->count('convention_id') }}</td>
                            <td class="d-flex">
                                <form action="{{ route('convention.destroy', $convention->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="mx-1 action-btn"><button class="btn bi bi-trash3 text-danger action-btn"
                                            onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                    </a>
                                </form>

                                <a class="mx-1 action-btn" href="{{ route('convention.edit',$convention->id) }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 action-btn" href="{{ route('convention.show',$convention->id) }}"><button
                                        class="btn bi bi-eye  action-btn"></button>
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
<script src="{{ asset('assets\js\convention-Form.js') }}"></script>
@endsection