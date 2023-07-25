<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('./layouts/app')
<div class="container mt-5">
    <div class="card">
      <div class="row g-0">
        <!-- Colonne pour le logo et l'image -->
        <div class="col-md-3">
          <img src="chemin/vers/votre-logo.png" alt="Logo" class="img-fluid">
          <img src="chemin/vers/votre-image.jpg" alt="Image" class="img-fluid mt-3">
        </div>
        <!-- Colonne pour les attributs -->
        <div class="col-md-9">
          <div class="card-body">
            <h5 class="card-title">Titre de la carte</h5>
            <p class="card-text">Description de la carte...</p>
            <p class="card-text">Attribut 1 : Valeur 1</p>
            <p class="card-text">Attribut 2 : Valeur 2</p>
            <!-- Ajoutez plus d'attributs ici -->
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('./layouts/footer')
</body>
</html>