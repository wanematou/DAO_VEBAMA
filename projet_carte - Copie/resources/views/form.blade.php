

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
  @include('./layouts/app')
  
  <a href="/espace1"> <img src="{{asset('image/retour.png')}}" alt="" width="50" height="50"></a>
  <div class="container">
    <div class="row">
    <div class="col-md-2 mt-4">
    <img src="{{ asset('image/logo.jpg') }}" alt="Description de l'image" width="200" height="200" >
    <h1>ENREGISTREMENT <br>Etudiants </h1>
    </div>
      <form class="col-md-6 offset-3 mb-5" method="post" action="{{route('register')}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray " name="nom" placeholder="Nom">     
        </div>
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="prenom"  placeholder="Prénom">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="matricule"   placeholder="Matricule">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="nationnalité"  placeholder="Nationnalité">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="cycle" placeholder="Cycle">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="filliere" placeholder="Filliere">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="niveau_etude" placeholder="Niveau d'étude">
        </div>
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="annee_academique" placeholder="Année academique">
        </div>
        <div class="mb-3">
          <label for="photo">Photo</label>
          <input type="file" class="form-control bg-transparent-gray" name="photo">
        </div>
        
        <button type="submit" class="btn bg-transparent-red text-white">Enregistrer</button>
      </form>
  
    </div>
  </div>
</body>
</html>
@include('./layouts/footer')