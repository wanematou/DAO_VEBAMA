<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="{{asset('bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
  <style>
    .bg-transparent-gray {
      background-color: rgba(128, 128, 128, 0.1) !important;
    }
    .bg-transparent-red {
      background-color:rgba(174, 0, 1, 1) !important;
    };
  </style>
</head>
<body>

<header class="bg-transparent-red text-light mb-4">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
     <h1 class="text-light fw-bold">MakeCarte</h1>
     <h3>Gestion de cartes</h3>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="#"> <h1>ESI</h1> </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<link rel="stylesheet" href="{{asset ('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}">

@yield('page-content')
</body>
</html>
<style>
  h3{
    position: relative;
    left: 250px;
  }
</style>

    

