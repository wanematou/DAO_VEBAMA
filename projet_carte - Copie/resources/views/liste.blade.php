<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="listeleve">
    @include('./layouts/app') <br>
   <a href="/espace1"> <img src="{{asset('image/retour.png')}}" alt="" width="50" height="50"></a>
    <div class="tab container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="col-md-6 offset-5">Liste des etudiants</h2>
                <table class="table table-success table-striped-columns">
        
                    <tr class="">
                        <th class="text-center text-primary">N°</th>       
                        <th class="text-center text-primary">Non</th>
                        <th class="text-center text-primary">Prenom</th>
                        <th class="text-center text-primary">Matricule</th>
                        <th class="text-center text-primary">Photo</th>
                        <th colspan = "4" class="text-center text-primary">Action
                           
                        </th>
                       
                    </tr>

                    <tbody>
                    @php
                     $ide = 1;
                    @endphp

                        @forelse ($etudiants as $etudiant)
                        <tr>
                        <td>{{$etudiant->id}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->matricule}}</td>
                        <td>
        @if ($etudiant->photo_path)
            <img src="{{ asset($etudiant->photo_path) }}" alt="Photo de l'étudiant" width="100" height="100">
        @else
            <p>Aucune photo</p>
        @endif
    </td>

                        <td class="text-center">
                            <a href="/details/{{$etudiant->id}}/show" class="btn btn-info">Details</a>
                        </td>


                        <td>
                            <a href="/modifier/{{$etudiant->id}}/edit" class="btn btn-info">Modifier</a>
                        </td>
                        <td>
                            <form action="{{ route('effacer', ['id' => $etudiant->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                             <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            
                        </td>
                        <td class="text-center">
                            <a href="/carte/{{$etudiant->id}}/edit" class="btn btn-info">Carte</a>
                         
                        </td>
                        @php
                            $ide+=1;
                        @endphp

                        @empty
                        @endforelse       
                    </tbody>


                </table>
                  {{$etudiants->links() }}   
            </div>
        </div>
    </div>
    @include('./layouts/footer')
</body>
</html>
