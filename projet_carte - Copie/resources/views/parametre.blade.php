

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
      <form class="col-md-6 offset-3 mb-2"  method="post" action="{{ route('cycle') }}" >
        @method('post')
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray " name="cycle" placeholder="Ajouter un cycle">
        </div>
        <button type="submit" class="btn bg-transparent-red text-white">Enregistrer</button>
      </form>

      <form class="col-md-6 offset-3 mb-2" method="post" action="{{ route('annee') }}">
        @method('post')
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="annee_academique"  placeholder="Ajouter une année academique">
        </div>
        <button type="submit" class="btn bg-transparent-red text-white">Enregistrer</button>
      </form>

      <form class="col-md-6 offset-3 mb-2" method="post" action="{{ route('filliere') }}">
        @method('post')
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="filliere"  placeholder="Ajouter une fillière">
        </div>
        <button type="submit" class="btn bg-transparent-red text-white">Enregistrer</button>
      </form>

      <form class="col-md-6 offset-3 mb-2" method="post" action="{{ route('niveau') }}" >
        @method('post')
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="niveau_etude"  placeholder="Ajouter un niveau d'étude">
        </div>
        <button type="submit" class="btn bg-transparent-red text-white">Enregistrer</button>
      </form>

      <form class="col-md-6 offset-3 mb-2" method="post" action="{{ route('nationnalité') }}" >
        @method('post')
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control bg-transparent-gray" name="nationnalité"  placeholder="Ajouter une nationnalité">
        </div>
        <button type="submit" class="btn bg-transparent-red text-white">Enregistrer</button>
      </form>

  
    </div>
  </div>
  @include('./layouts/footer')
</body>
</html>
