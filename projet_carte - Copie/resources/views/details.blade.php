<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('./layouts/app')
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-3 bg-transparent-gray">
                    <h1 class="text-center">Détails de l'étudiant</h1>
                    <p>Nom: {{ $etudiant->nom }}</p>
                    <p>Prénom: {{ $etudiant->prenom }}</p>
                    <p>Matricule: {{ $etudiant->matricule }}</p>
                    <p>Nationnalité: {{ $etudiant->nationnalite }}</p>
                    <p>Cycle: {{ $etudiant->cycle }}</p>
                    <p>Fillière: {{ $etudiant->filliere }}</p>
                    <p>Niveau d'étude: {{ $etudiant->niveau_etude }}</p>
                    <p>Année academique: {{ $etudiant->annee_academique }}</p>
                    <p>Photo: {{ $etudiant->photo }}</p>
                </form>
            </div>
        </div>
    </div><br>
    @include('./layouts/footer')
</body> 

</html>