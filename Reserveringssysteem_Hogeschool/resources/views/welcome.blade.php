
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Laravel</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}
        {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
        {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
        {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
        {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
        {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">--}}
        {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">--}}
        {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
        {{--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">--}}
        {{--<script src="//code.jquery.com/jquery-1.10.2.js"></script>--}}
        {{--<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>--}}
        {{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
        {{--<style>--}}
            {{--h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}--}}
            {{--body {font-family: "Open Sans"}--}}
        {{--</style>--}}
        {{--<script>--}}
            {{--$(function() {--}}
                {{--$( "#skills" ).autocomplete({--}}
                    {{--source: 'search.php'--}}
                {{--});--}}
            {{--});--}}
        {{--</script>--}}
        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-image: URL('{{ asset('images/motor.jpg') }}');--}}
                {{--background-size: cover;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Nunito', sans-serif;--}}
                {{--font-weight: 200;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}



            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: left;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 13px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
            {{--body{ font-family: sans-serif;}--}}
            {{--.none{ display:none;}--}}
            {{--.dropdown{color: #444444;font-size:17px;}--}}
            {{--#calender_section{ width:700px; margin:30px auto 0;}--}}
            {{--#calender_section h2{ background-color:#56baed; color:#444444; font-size:17px; text-align:center; line-height:40px;}--}}
            {{--#calender_section h2 a{ color:#F58220; float:none;}--}}
            {{--#calender_section_top{ width:100%; float:left; margin-top:20px;}--}}
            {{--#calender_section_top ul{padding:0; list-style-type:none;}--}}
            {{--#calender_section_top ul li{ float:left; display:block; width:99px; border-right:1px solid #fff;  text-align:center; font-size:14px; min-height:0; background:none; box-shadow:none; margin:0; padding:0;}--}}
            {{--#calender_section_bot{ width:100%; margin-top:20px; float:left; border-left:1px solid #ccc; border-bottom:1px solid #ccc;}--}}
            {{--#calender_section_bot ul{ margin:0; padding:0; list-style-type:none;}--}}
            {{--#calender_section_bot ul li{ float:left; width:99px; height:80px; text-align:center; border-top:1px solid #ccc; border-right:1px solid #ccc; min-height:0; background:none; box-shadow:none; margin:0; padding:0; position:relative;}--}}
            {{--#calender_section_bot ul li span{ margin-top:7px; float:left; margin-left:7px; text-align:center;}--}}

            {{--.grey{ background-color:#DDDDDD !important;}--}}
            {{--.light_sky{ background-color:#B9FFFF !important;}--}}

            {{--/*========== Hover Popup ===============*/--}}
            {{--.date_cell { cursor: pointer; cursor: hand; }--}}
            {{--.date_cell:hover { background: #DDDDDD !important; }--}}
            {{--.date_popup_wrap {--}}
                {{--position: absolute;--}}
                {{--width: 143px;--}}
                {{--height: 115px;--}}
                {{--z-index: 9999;--}}
                {{--top: -115px;--}}
                {{--left:-55px;--}}
                {{--background: transparent url(add-new-event.png) no-repeat top left;--}}
                {{--color: #666 !important;--}}
            {{--}--}}
            {{--.events_window {--}}
                {{--overflow: hidden;--}}
                {{--overflow-y: auto;--}}
                {{--width: 133px;--}}
                {{--height: 115px;--}}
                {{--margin-top: 28px;--}}
                {{--margin-left: 25px;--}}
            {{--}--}}
            {{--.event_wrap {--}}
                {{--margin-bottom: 10px; padding-bottom: 10px;--}}
                {{--border-bottom: solid 1px #E4E4E7;--}}
                {{--font-size: 12px;--}}
                {{--padding: 3px;--}}
            {{--}--}}
            {{--.date_window {--}}
                {{--margin-top:20px;--}}
                {{--margin-bottom: 2px;--}}
                {{--padding: 5px;--}}
                {{--font-size: 16px;--}}
                {{--margin-left:9px;--}}
                {{--margin-right:14px--}}
            {{--}--}}
            {{--.popup_event {--}}
                {{--margin-bottom: 2px;--}}
                {{--padding: 2px;--}}
                {{--font-size: 16px;--}}
                {{--width:100%;--}}
            {{--}--}}
            {{--.popup_event a {color: #000000 !important;}--}}
            {{--.packeg_box a {color: #F58220;float: right;}--}}
            {{--a:hover {color: #181919;text-decoration: underline;}--}}

            {{--@media only screen and (min-width:480px) and (max-width:767px) {--}}
                {{--#calender_section{ width:336px;}--}}
                {{--#calender_section_top ul li{ width:47px;}--}}
                {{--#calender_section_bot ul li{ width:47px;}--}}
            {{--}--}}
            {{--@media only screen and (min-width: 320px) and (max-width: 479px) {--}}
                {{--#calender_section{ width:219px;}--}}
                {{--#calender_section_top ul li{ width:30px; font-size:11px;}--}}
                {{--#calender_section_bot ul li{ width:30px;}--}}
                {{--#calender_section_bot{ width:217px;}--}}
                {{--#calender_section_bot ul li{ height:50px;}--}}
            {{--}--}}

            {{--@media only screen and (min-width: 768px) and (max-width: 1023px) {--}}
                {{--#calender_section{ width:530px;}--}}
                {{--#calender_section_top ul li{ width:74px;}--}}
                {{--#calender_section_bot ul li{ width:74px;}--}}
                {{--#calender_section_bot{ width:525px;}--}}
                {{--#calender_section_bot ul li{ height:50px;}--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="flex-center position-ref full-height">--}}
            {{--@if (Route::has('login'))--}}
                {{--<div class="top-right links">--}}
                    {{--@auth--}}
                        {{--<a href="{{ url('/home') }}" style="color:black;">Home</a>--}}
                    {{--@else--}}
                        {{--<a href="{{ route('login') }}" style="color:black;">Login</a>--}}

                        {{--@if (Route::has('register'))--}}
                            {{--<a href="{{ route('register') }}">Register</a>--}}
                        {{--@endif--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--<div class="content">--}}
                {{--<center><h2 style="text-align: center; color:black;"><b>Rijvaardigheidstraining Voorne-Putten</b></h2></center>--}}
                <!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->
                {{--<form action="InsertBooks.php" method="post">--}}

                    {{--<table border="2" align="left" cellpadding="5" cellspacing="5" style="margin:50px; background-color:#56baed; color:black;">--}}
                        {{--<tr>--}}
                            {{--<td> Voornaam :</td>--}}
                            {{--<td> <input type="text" name="isbn" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td> Achternaam :</td>--}}
                            {{--<td> <input type="text" name="title" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td> Adres :</td>--}}
                            {{--<td> <input type="text" name="author" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td> Postcode :</td>--}}
                            {{--<td> <input type="text" name="edition" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td> Woonplaats: </td>--}}
                            {{--<td> <input type="text" name="publication" size="48"> </td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<td> Email: </td>--}}
                            {{--<td> <input type="text" name="publication" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td> Telefoonnummer: </td>--}}
                            {{--<td> <input type="text" name="publication" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td> Datum: </td>--}}
                            {{--<td> <input type="date" name="publication" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td> Tijd: </td>--}}
                            {{--<td> <input type="time" name="publication" size="48"> </td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td></td>--}}
                            {{--<td>--}}
                                {{--<input type="submit" value="submit">--}}
                                {{--<input type="reset" value="Reset">--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    {{--</table>--}}
                {{--</form>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}

                        <!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('fullcalendar/fullcalendar.min.css')}}" />
    <script src="{{asset('fullcalendar/lib/jquery.min.js')}}"></script>
    <script src="{{asset('fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{asset('fullcalendar/fullcalendar.min.js')}}"></script>

    <script>

        $(document).ready(function () {
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                events: "@include('fetch')",
                displayEventTime: false,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var title = prompt('Event Title:');

                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                        $.ajax({
                            url: 'add-event.php',
                            data: 'title=' + title + '&start=' + start + '&end=' + end,
                            type: "POST",
                            success: function (data) {
                                displayMessage("Added Successfully");
                            }
                        });
                        calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true
                        );
                    }
                    calendar.fullCalendar('unselect');
                },

                editable: true,
                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
                eventClick: function (event) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST",
                            url: "delete-event.php",
                            data: "&id=" + event.id,
                            success: function (response) {
                                if(parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event.id);
                                    displayMessage("Deleted Successfully");
                                }
                            }
                        });
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
        body {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
        }

        #calendar {
            width: 700px;
            margin: 0 auto;
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
    </style>
</head>
<body>
<h2>PHP Calendar Event Management FullCalendar JavaScript Library</h2>

<div class="response"></div>
<div id='calendar'></div>
</body>


</html>

