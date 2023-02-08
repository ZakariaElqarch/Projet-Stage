@extends('template.layouts.template');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <div class="panel-body widget-shadow">
                <h4>Tous les Projet:</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Budget</th>
                            <th>Convention</th>
                            <th>Status</th>
                            <th>Taux d'avancement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Projet 1</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ random_int(100000, 10000000) }} DH</td>
                            <td>Convention 1</td>
                            <td>Status 1</td>
                            <td>avancement 2 </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Projet 2</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ random_int(10000, 10000000) }} DH</td>
                            <td>Convention 4</td>
                            <td>Status 3</td>
                            <td>avancement 1 </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Projet 3</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1000000, 10000000) }} DH</td>
                            <td>Convention 2</td>
                            <td>Status 3</td>
                            <td> avancement 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection