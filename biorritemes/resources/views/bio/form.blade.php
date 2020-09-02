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

<p>La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los
animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes
biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha
comprobado estadísticamente que la energía física se comporta cíclicamente en
periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en
33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en
una fase positiva, durante la cual las energías y las capacidades son altas</p>

</br> 


<form action="store" method="post">
@csrf
  <div class="form-group">
    <h4 for="usuariNom">Introdueixi el vostre nom de usuari</h4>
    <input type="text" class="form-control" id="usuariNom" name="usuariNom">
  </div>
  <div class="form-group">
    <h4 for="usuariData">Introdueixi la vostra data de naixament </h4>
    <input type="date" class="form-control" id="usuariData" name="usuariData">
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar!</button>
</form>

</br> 

@endsection

@section('footer')

@endsection