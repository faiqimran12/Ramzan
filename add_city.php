<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 400px; margin: auto; }
        .result { font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow">
            <h3 class="mb-3">City Form</h3>
            <form id="add_city" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="city" placeholder="Enter your city" required />
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
            
            <?php if (!empty($city)) { echo "<div class='result alert alert-success mt-3'>You entered: $city</div>"; } ?>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
        $.ajax({
            url: "inc/process.php",
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
</html>
