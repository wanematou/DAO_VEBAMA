<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tableau de bord vertical à gauche - Bootstrap 5</title>
  <link rel="stylesheet" href="{{asset('bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
  <style>
    .sidebar {
      height: 100vh;
    }

    .chat-container {
      height: 100vh;
      overflow-y: scroll;
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-lg-2 bg-dark sidebar">
      <!-- Barre latérale -->
      <h2 class="text-light">Paramètre</h2>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/parametre">Cycle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/parametre">Niveau d'étude</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/parametre">Nationnalité</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/parametre">filliére</a>
        </li>
      </ul>
    </div>


<link rel="stylesheet" href="{{asset ('bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js')}}">
@yield('page-content')
</body>
</html>

<style>
  .nav-link:hover{
    cursor: pointer;
    background: linear-gradient(180deg, rgba(174, 0, 1, 1), rgba(174, 0, 1, 1));
  }
  
</style>