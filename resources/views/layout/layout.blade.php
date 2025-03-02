<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Plagcheck</title>

    <!-- Bootstrap -->
    <link href="{{asset("assets/css/bootstrap.css")}}" rel="stylesheet">
    <script src="{{asset("assets/js/bootstrap.js")}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">
</head>
<body>
    @yield("content")
</body>
</html>
