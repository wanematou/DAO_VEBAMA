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
            <div class="col-md-6 offset-4 bg-transparent-gray">
                <form method="post" action="/modifier/{{$etudiant->id}}/update">
 
                 
                    @method('put')
                       @csrf
                    <p> 
                        <label for="name">Nom</label>
                        <input class="ms-3 " type="text" name="nom" value="{{$etudiant->nom}}" required>
                    </p>
                    <p> 
                        <label for="name">Prénom</label>
                        <input class="ms-3" type="text" name="prenom" value="{{$etudiant->prenom}}" required>
                    </p>
                    <p> 
                        <label for="name">Matricule</label>
                        <input class="ms-3" type="text" name="matricule" value="{{$etudiant->matricule}}" required>
                    </p>
                    <p> 
                        <label for="name">Nationnalité</label>
                        <input class="ms-3" type="text" name="nationnalite" value="{{$etudiant->nationnalite}}" required>
                    </p>
                    <p> 
                        <label for="name">Cycle</label>
                        <input class="ms-3" type="text" name="cycle" value="{{$etudiant->cycle}}" required>
                    </p>
                    <p> 
                        <label for="name">Fillière</label>
                        <input class="ms-3" type="text" name="filliere" value="{{$etudiant->filliere}}" required>
                    </p>
                    <p> 
                        <label for="name">Niveau d'étude</label>
                        <input class="ms-3" type="text" name="niveau_etude" value="{{$etudiant->niveau_etude}}" required>
                    </p>
                    <p> 
                        <label for="name">Année academique</label>
                        <input class="ms-3" type="text" name="annee_academique" value="{{$etudiant->annee_academique}}" required>
                    </p>
                    <p> 
                        <label for="name">Photo</label>
                        <input class="ms-3" type="file" name="photo" value="{{$etudiant->photo}}" required>
                    </p>

                    <button type="submit" class="btn bg-transparent-red text-light">Modifier</button>
                </form>
            </div>
        </div>
    </div><br>
    @include('./layouts/footer')
</body>
</html>