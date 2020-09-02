@extends('layouts.master')

@section('pageTitle','Pàgina Llista de pàgines WEB')

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

		<br/>

		<div class="container-fluid">

		<h3>Resultats de {{$nomUsuari}}</h3>

        <h4>Nascut el: {{$dataNeixement}}.</h4>  

        <br/>
        <br/>
        
        <h4>Els teus biorritmes segons el dia de avui son:</h4> 

		<br/>

        <div class="container">
            <h4 class="display-6">Biorritme Físic:</h4>
            <p>{{$progresFisic}} %</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$progresFisic}}%; background:#ff6100" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <br/>
        <div class="container">
            <h4 class="display-6">Biorritme Emocional:</h4>
            <p>{{$progresEmocional}} % </p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$progresEmocional}}%; background:#fcfc1b" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <br/>
        <div class="container">
            <h4 class="display-6">Biorritme Intelectual:</h4>
            <p>{{$progresIntelectual}} %</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{$progresIntelectual}}%; background:#00a9ff" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>

    	<br/>

@endsection