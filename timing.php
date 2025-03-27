<?php
include('connect.php');
include('Timing.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
        $.ajax({
            url: "inc/process1.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            dataType: "json",
            processData: false,
            }).done(function (data) {
                //alert(data.msg_code)
                if(data.msg_code == 0) {
                // alert(data.msg);
                document.getElementById("login_form").reset();
                window.location.replace("https://portal.humnetwork.tv/");
                } else {
                    alert(data.msg);
                }
                console.log(data);
             //   console.log(data);
            });

            event.preventDefault();
        });
    });
</script>

    