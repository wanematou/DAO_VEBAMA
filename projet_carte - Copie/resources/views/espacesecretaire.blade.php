@include('./layouts/app')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Espace de Travail</title>
</head> 
<body>
<div class="espace">
@include('./layouts/outils')

 <div class="col-md-9 col-lg-10">

   <div class="colgnrl">
    <a href="/form" class="col2">  <img src="{{ asset('image/etudiant.png') }}" alt="secretaire" width="200" height="200" class="">
      <p>Enregistrer etudiant</p></a>
    </div>

    <div class="colgnrl">
      <a href="" class="col3"><img src="{{ asset('image/carte.png') }}" alt="secretaire" width="200" height="200" class="">
        <p>Imprimer carte</p></a>
      <a href="" class="col4"><img src="{{ asset('image/liste.png') }}" alt="secretaire" width="200" height="200" class="">
      <p>Consulter liste</p></a>
    </div>

  </div>
</div>

</body>
</html>
<br>
@include('./layouts/footer')

<style>

  .espace{
    position: relative;
    bottom: 25px;
  }
    .colgnrl{
      display: flex;
      gap: 20px;
      position: relative;
      top: 40px !important;
    }

.col2,.col3,.col4
{
	border: 0px black solid;
	margin-left: 150px;
	background-color: white;
	box-shadow: 0 8px 8px 0 rgba(0,0,0,0.2),0 6px 6px 0 rgba(0,0,0,0.19);
	border-radius: 3px;
	text-align: center;
	width: 25%;
	height: 200px;
    text-decoration: none;
    font-weight: bold;

}
.col3,.col4{
  position: relative;
  top: 80px;
}

.col2{
    position: relative;
    left: 20%;
}

.col2:hover,.col3:hover,.col4:hover
{
   box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  
   background: linear-gradient(180deg, rgba(174, 0, 1, 1), rgba(174, 0, 1, 1));

   color: black;
   cursor: pointer;
}
</style>




