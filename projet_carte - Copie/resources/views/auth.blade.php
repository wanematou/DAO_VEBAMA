<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire d'authentification</title>
  
</head>
<body>
   @include('./layouts/app')
    <br>
    

<div class="container">

@if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

  <div class="row justify-content-center">
    <div class="col-md-6">
      <h1 class="ms-5">Authentification</h1>
      <form class="mb-5" action="/authen/traitement" method="post">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Adresse e-mail</label>
          <input type="email" class="form-control bg-transparent-gray" id="mail" name="mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control bg-transparent-gray" id="mot_passe" name="mot_passe" required>
          <br>
        </div>
        <button type="submit" class="btn  bg-transparent-red text-white">Se connecter</button>
      </form>
      <a href="forma"> <button type="submit" class="btn  bg-transparent-red text-white ">S'inscrire</button></a>
    </div>
  </div> 
</div>
<br> <br> 
@include('./layouts/footer')
</body>
</html>

<style>
  a{
    margin-left: 250px;
    position: relative;
    bottom: 85px;
  }
</style>
