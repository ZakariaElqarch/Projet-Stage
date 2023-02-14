@extends('layouts.layout');
@section('content');
<div id="page-wrapper">
    <div class="profile-bottom">
        <h3><i class="fa fa-user"></i>Profile</h3>
        <div class="profile-bottom-top">
            <div class="col-md-4 profile-bottom-img">
                <img src="" alt="later">
            </div>
            <div class="col-md-8 profile-text">
                <h6>hamza El azzouzi</h6>
                <table>
                    <tr>
                        <td>Email</td>
                        <td> :</td>
                        <td><a href="info@gmail.com">info@lorem.com</a></td>
                    </tr>
                    <tr>
                        <td>N Tel</td>
                        <td> :</td>
                        <td>0512345678</td>
                    </tr>
                    <tr>
                        <td>divsion </td>
                        <td>:</td>
                        <td> Devision </td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="profile-btn col-sm-offset-2">

            <button type="button" href="#" class="btn btn-default add-btn">Changer une Info</button>
            <div class="clearfix"></div>
        </div>


    </div>
</div>
<link rel="stylesheet" href="assets\css\custom.profile.css">
<link rel="stylesheet" href="assets\css\style.profile.css">
<script src="assets\vendors\js\jquery-1.11.1.min.js"></script>
@endsection