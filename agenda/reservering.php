<?php
//header('refresh:5; url=./');
?>
<html>
<head>
    <link rel="stylesheet" href="uitloggen.css" />
    <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
    <script src="fullcalendar/lib/jquery.min.js"></script>
    <script src="fullcalendar/lib/moment.min.js"></script>
    <script src="fullcalendar/fullcalendar.min.js"></script>

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
    </style>
</head>
<body>
<?php
include('./db.php');

echo "<h2>Rijvaardigheidstraining Voorne-Putten</h2>";
echo "<h1>een moment geduld...</h1>";
echo "
    
    <div class=\"response\"></div>
    <div id='calendar'></div>";
$voornaam=$_POST['voornaam'];
$title=$_POST['time'];
$achternaam=$_POST['achternaam'];
$email=$_POST['email'];
$plaats=$_POST['plaats'];
$adres=$_POST['adres'];
$pc=$_POST['postcode'];
$tel=$_POST['tel'];
$datum=$_POST['datum'];
$tijd=$_POST['time'];

$query1="insert into events values('','$title','$voornaam','$achternaam','$email','$plaats','$adres','$pc','$tel','$tijd','$datum','','','0')";
mysqli_query($conn,$query1);

//$to      = $email;
//$subject = 'the subject';
//$message = 'hello';
//$headers = 'From: webmaster@example.com' . "\r\n" .
//    'Reply-To: webmaster@example.com' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//mail($to, $subject, $message, $headers);
//
//echo 'Email Sent.';




// Using the ini_set()
ini_set("SMTP", "mail.esolutions-it.nl");
ini_set("sendmail_from", "info@esolutions-it.nl");
//ini_set("smtp_port", "25");

//// The message
//$message = "The mail message was sent with the following mail setting:\r\nSMTP = mail.zend.com\r\nsmtp_port = 25\r\nsendmail_from = YourMail@address.com";
//
//// Send
//$headers = "From: shlomo@zend.com";

mail("g.egas@outlook.com","test message","This is a test");

echo "Check your email now....<BR>";

?>
</body>
</html>