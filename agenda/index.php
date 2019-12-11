<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
    <script src="fullcalendar/lib/jquery.min.js"></script>
    <script src="fullcalendar/lib/moment.min.js"></script>
    <script src="fullcalendar/fullcalendar.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

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
body {
    margin-top: 50px;
    text-align: center;
    font-size: 12px;
    font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
    background-color:#23b0db;
}

#calendar {
    width: 700px;
    margin: 0 auto;
    background-color:white;
    border:5px solid black;
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
</style>
</head>
<body>
<!--<div class="flex-center position-ref full-height">-->
<!--<div class="top-right links">-->
<!--    <a href="{{ route('login') }}" style="color:black;">Login</a>-->
<!--</div>-->
<!--</div>-->

    <h2>Rijvaardigheidstraining Voorne-Putten</h2><br /><br />
    <form class="needs-validation" novalidate style="width: 90%; margin-left:70px;" action='./reservering.php' method='POST'>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Voornaam</label>
                <input type="text" name="voornaam" class="form-control" id="validationCustom01" placeholder="Voornaam" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Achternaam</label>
                <input type="text" class="form-control" name="achternaam" id="validationCustom02" placeholder="Achternaam" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" name="email" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">Adres + Huisnr.</label>
                <input type="text" name="adres" class="form-control" id="validationCustom03" placeholder="Adres" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">Plaats</label>
                <input type="text" name="plaats" class="form-control" id="validationCustom04" placeholder="Plaats" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Postcode</label>
                <input type="text" name="postcode" class="form-control" id="validationCustom05" placeholder="Postcode" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="validationCustom03">Telfoonnummer</label>
                <input type="text" name="tel" class="form-control" id="validationCustom03" placeholder="Telefoonnummer" required>
                <div class="invalid-feedback">
                    Please provide a valid phone number.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">Datum</label>
                <input type="date" name="datum" class="form-control" id="validationCustom04" placeholder="Datum" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Tijd</label>
                <input type="time" name="time" class="form-control" id="validationCustom05" placeholder="Tijd" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>

        <button class="btn btn-primary button-kleur" type="submit" style="border:1px solid black; background-color:white; color:#23b0db;">Reserveren</button>
        <button class="btn btn-success" style="border:1px solid black;"><a href="http://localhost/Reserveringssysteem_Hogeschool/public/login" style="text-decoration: none; color:black;">Inloggen</a></button>
    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <div class="response"></div>
    <div id='calendar'></div>
<br /><br />
    <p>Made by <b>Gertjan Egas</b>, Hogeschool Rotterdam</p>
</body>


</html>