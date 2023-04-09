@extends('layouts.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/project.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('assets/css/division.css') }}"> --}}
<div id="page-wrapper">
    <a href={{ route('project.create') }}>
        <button class="btn add-btn flex">Ajouter Une Projet</button>
    </a>
    <h3 class="title1"><i class="bi bi-journal-x nav_icon"> Projet</i></h3>
    <div class="main-page">


        <div id="ProjectTable">

            <div class="panel-body widget-shadow">
                @if(session('success'))
                toastr.success('{{ session('success') }}');
                @endif





                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Date Validité</th>
                            <th>Taux d'avancement</th>
                            <th>Convention</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($project as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->title}}</td>
                            <td>{{$data->validity}}</td>
                            <td>
                                <div class="progress progress-striped active">
                                    <div class="bar  blue" style="width:{{$data->progress}}%"></div>
                                </div><span class="pull-right">{{$data->progress}}%</span>
                            </td>

                            <td>
                                @foreach($Allconvention as $conv)
                                {{$conv->id == $data->convention_id ? $conv->title : ''}}
                                @endforeach
                            </td>

                            <td class="d-flex">
                                <form action="{{ route('project.destroy',$data->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="mx-1 "><button class="btn bi bi-trash3 text-danger action-btn"
                                            onclick="return confirm('Etes-vous sûr de supprimer cette convention?')"></button>
                                    </a>
                                </form>

                                <a class="mx-1 " href="{{ route('project.edit',$data->id) }}"><button
                                        class="btn bi bi-pencil-square  action-btn"></button></a>

                                <a class="mx-1 " href="{{ route('project.show',$data->id) }}"><button
                                        class="btn bi bi-eye action-btn"></button>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="{{ asset('assets\vendors\js\jquery-1.11.1.min.js') }}"></script>
    {{-- <script src="{{ asset('assets\js\project.list.js') }}"></script> --}}
    <script src="{{ asset('assets\js\convention-Form.js') }}"></script>
    @endsection