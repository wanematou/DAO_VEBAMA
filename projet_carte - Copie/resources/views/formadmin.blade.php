

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
  @include('./layouts/app')
  
  <div class="container">
    <div class="row">
    <div class="col-md-2 mt-4">
    <img src="{{ asset('image/logo.jpg') }}" alt="Description de l'image" width="200" height="200" >
    <h1>Enregistrement <br> Utilisateurs </h1>
    </div>
      <form method="post" action="{{route('enregistrer')}}" class="col-md-6 offset-3 mb-5">
      @csrf
        <div class="mb-4">
          <input type="text" class="form-control bg-transparent-gray" name="nom" placeholder="Nom">
        </div>
        <div class="mb-4">
          <input type="text" class="form-control bg-transparent-gray" name="prenom"  placeholder="Prénom">
        </div>
        <div class="mb-4">
          <input type="email" class="form-control bg-transparent-gray" name="mail"  placeholder="Email">
        </div>
        <div class="mb-4">
          <input type="text" class="form-control bg-transparent-gray" name="mot_passe" placeholder="Mot de passe">
        </div>
        <div class="mb-4">
          <input type="text" class="form-control bg-transparent-gray" name="role" placeholder="Fonction">
        </div>
        
        <button type="submit" class="btn bg-transparent-red text-white">Enregistrer</button>
      </form>
     
    </div>
  </div> <br> 
  @include('./layouts/footer') 
</body>
</html>
