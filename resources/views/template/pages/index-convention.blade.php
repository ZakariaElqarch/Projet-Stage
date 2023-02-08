@extends('template.layouts.template');

@section('content');

<div id="page-wrapper">
    <div class="main-page">
        <div class="tables">
            <div class="panel-body widget-shadow">
                <h4>Tous les convention:</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Budget</th>
                            <th>Division</th>
                            <th>Service</th>
                            <th>Les associés</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Convention 1</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ random_int(100000, 10000000) }} DH</td>
                            <td>Devision 1</td>
                            <td>Service 1</td>
                            <td>associer 1 <br> associer 2 <br> associer 3 </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Convention 2</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ random_int(100000, 10000000) }} DH</td>
                            <td>Devision 4</td>
                            <td>Service 6</td>
                            <td>associer 4 <br> associer 5 <br> associer 6 </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Convention 3</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ date('Y-m-d') }}</td>
                            <td>{{ random_int(1000000, 100000000) }} DH</td>
                            <td>Devision 2</td>
                            <td>Service 3</td>
                            <td>associer 7 <br> associer 8 <br> associer 9 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection