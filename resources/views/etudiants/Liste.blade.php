@extends('acceuille')

@section('content')
<body>
    <div class="container text-center">
    <h2>LISTE DES ETUDIANTS</h2>
    </div> <hr>
    <div class="container text-center">
    <div class="row align-items-start">
        <a href="/ajouter" class="btn btn-primary">AJOUTER UN ETUDIANT</a>
      @if(session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
      @endif

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">CLASSE</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($etudiants as $etudiant)
    <tr>
      <td>{{ $etudiant->id }}</td>
      <td>{{ $etudiant->nom }}</td>
      <td>{{ $etudiant->prenom }}</td>
      <td>{{ $etudiant->classe }}</td>
      <td>
      <a href="/modifier-etudiant/{{ $etudiant->id }}" class="btn btn-info">MODIFER</a>
      <a href="/supprimer-etudiant/{{ $etudiant->id }}" class="btn btn-danger">SUPPRIMER</a></td>
    </tr>

    
  @endforeach
  </tbody>
</table>

{{ $etudiants->links() }}

  </div>
</div>
</body>

@endsection