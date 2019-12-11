<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
    <script src="fullcalendar/lib/jquery.min.js"></script>
    <script src="fullcalendar/lib/moment.min.js"></script>
    <script src="fullcalendar/fullcalendar.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/home.css">


    <script>
        $(document).ready(function () {
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                events: "fetch-event.php",
                displayEventTime: false,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                }

            });
        });

        function displayMessage(message) {
            $(".response").html("<div class='success'>"+message+"</div>");
            setInterval(function() { $(".success").fadeOut(); }, 1000);
        }
    </script>


    <style>
        #calendar {
            width: 700px;
            margin: 0 auto;
            background-color:white;
            border:2px solid black;
            padding:10px;
        }

        .response {
            height: 60px;
        }

        .success {
            background: #cdf3cd;
            padding: 10px 60px;
            border: #c3e6c3 1px solid;
            display: inline-block;
        }
        .button-kleur:hover{
            background-color:black!important;
            color:white!important;
        }
        .sidebar{
            margin-top:30px!important;
        }
        .content-wrapper{
            margin-top:30px;
        }
    </style>
</head>
<body>
<!--<div class="flex-center position-ref full-height">-->
<!--<div class="top-right links">-->
<!--    <a href="{{ route('login') }}" style="color:black;">Login</a>-->
<!--</div>-->
<!--</div>-->

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Rijvaardigheidstraining Voorne-Putten
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>


        </div>
    </div>
</nav>

<div class="container-fluid page-body-wrapper" style="margin-top:-95px;">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/Reserveringssysteem_Hogeschool/public/home">
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
                        <li class="nav-item"> <a class="nav-link" href="http://localhost/Reserveringssysteem_Hogeschool/public/reserveringen">Bekijken</a></li>
                        <li class="nav-item"> <a class="nav-link" href="http://localhost/Reserveringssysteem_Hogeschool/public/reserveringen/toevoegen">Toevoegen</a></li>
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
                <a class="nav-link" href="http://localhost/Reserveringssysteem_Hogeschool/public/klanten">
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
                            <h4 class="font-weight-bold mb-0">Agenda</h4>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">

<div class="response"></div>
<div id='calendar'></div>
            </div>

</body>


</html>