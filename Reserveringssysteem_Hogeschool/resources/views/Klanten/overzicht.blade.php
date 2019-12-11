@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">Dashboard</div>--}}

{{--<div class="card-body">--}}
{{--@if (session('status'))--}}
{{--<div class="alert alert-success" role="alert">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}

{{--You are logged in!--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoyalUI Admin</title>
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>

<!-- partial -->
<div class="container-fluid page-body-wrapper" style="margin-top:-95px;">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="ti-home menu-icon"></i>
                    <span class="menu-title">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="ti-pin2 menu-icon"></i>
                    <span class="menu-title">Reserveringen</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('reserveringen')}}">Bekijken</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('reserveringen_toevoegen')}}">Toevoegen</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/agenda/agenda.php">
                    <i class="ti-agenda menu-icon"></i>
                    <span class="menu-title">Agenda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('klanten')}}">
                    <i class="ti-face-smile menu-icon"></i>
                    <span class="menu-title">Klanten</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/tables/basic-table.html">
                    <i class="ti-zip menu-icon"></i>
                    <span class="menu-title">PDF Formulieren</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="ti-power-off menu-icon"></i>
                    <span class="menu-title">Uitloggen</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Overzicht klanten</h4>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title mb-0">Klanten</p>
                            <div class="table-responsive">

                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Volledige naam</th>
                                        <th>Email</th>
                                        <th>Telefoonnummer</th>
                                        <th>Adres</th>
                                        <th>Plaats</th>
                                        <th>Postcode</th>
                                        <th>Actie</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($db_get_1 as $value)
                                        <form action="{{url("/klanten_pdf/pdf/$value->id")}}" method="POST">
                                            {{csrf_field()}}

                                            <input type="text" name="id_pdf" value="{{$value->id}}" style="display:none" />


                                        <tr>
                                            <td>{{$value->achternaam}}, {{$value->voornaam}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->telefoon}}</td>
                                            <td>{{$value->adres}}</td>
                                            <td>{{$value->plaats}}</td>
                                            <td>{{$value->postcode}}</td>
                                            <td>
                                                <a href="http://localhost/Reserveringssysteem_Hogeschool/public/accept/{{$value->id}}"><label class="badge badge-success" style="cursor: pointer;">Bewerken</label></a>
                                                <label class="badge badge-warning" style="cursor: pointer; color:white;"><button type="submit" style="background-color: transparent; border:none; color:white;">PDF</button></label></a>
                                                <a href="./klant/delete/{{$value->id}}"><label class="badge badge-danger" style="cursor: pointer;">Verwijderen</label></a>
                                            </td>
                                        </tr>

                                        </form>

                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>

</body>

</html>

@endsection

