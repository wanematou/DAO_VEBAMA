<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
    <style>
        .bg-transparent-gray {
      background-color: rgba(128, 128, 128, 0.3) !important;
    }
    </style>
</head>
<body>
    
<footer class="sticky-footer bg-transparent-gray ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('image/logoo.png') }}" alt="Description de l'image" width="100" height="100" >
            </div>
           
            <div class="col-md-4">
                <p>&copy; 2023 copyright by developpeur</p>
            </div>
        <style></style>
        </div>
    </div>
</footer>
<link rel="stylesheet" href="{{asset ('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}">

@yield('page-content')
</body>
</html>