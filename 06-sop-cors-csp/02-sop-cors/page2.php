<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div id="result1">-</div>
</body>
<script type="text/javascript">
    $.ajax({
            url: "https://www.infoheap.com/demo2/cors/hello_allowed_from_any.php"
        })
        .done(function(data) {
            $("#result1").html(data);
        });
</script>