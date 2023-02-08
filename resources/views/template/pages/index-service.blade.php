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
                            <th>Le Nom de service</th>
                            <th>Devision</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>service 1</td>
                            <td>Devision 1 <br> Devision 2 <br> Devision 3 <br>  Devision 4</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>service 2</td>
                            <td>Devision 1 <br> Devision 2 <br> Devision 3 <br>  Devision 4</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>service 3</td>
                            <td>Devision 1 <br> Devision 2 <br> Devision 3 <br>  Devision 4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection