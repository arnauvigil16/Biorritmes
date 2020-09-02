@extends('layouts.master')

@section('pageTitle', 'Pagina Index')

@section('header')
<div class="container-fluid">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Biorritme</h1>
                <h1>Benvingut a l'App dels Biorritmes</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')

</br>
<h3>ERROR!</h3>
<h4>Has introduit les dades incorrectament o la operació ha resultat erronea</h4>

</br> 


<form action="store" method="post">
@csrf
  <div class="form-group">
    <h5 for="usuariNom">Introdueixi el vostre nom de usuari</h5>
    <input type="text" class="form-control" id="usuariNom" name="usuariNom">
  </div>
  <div class="form-group">
    <h5 for="usuariData">Introdueixi la vostra data de naixament </h5>
    <input type="date" class="form-control" id="usuariData" name="usuariData">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</br> 

@endsection

@section('footer')

@endsection