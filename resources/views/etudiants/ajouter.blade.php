@extends('acceuille')

@section('content')

<div class="container text-center">
<h2>AJOUE D'UN ETUDIANT</h2>
</div>
<hr><br>

@if(session('status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif

<ul>
@foreach($errors->all() as $error)
<li class="alert alert-danger">{{ $error }}</li>
@endforeach
</ul>


<form action="/ajouter/traitement" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">

  </div>
  <div class="mb-3">
    <label for="classe" class="form-label">Classe</label>
    <input type="text" class="form-control" id="classe" name="classe">
  </div>
  
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <a href="/etudiants" class="btn btn-danger">Retourner vers la page principale</a>
</form>

@endsection