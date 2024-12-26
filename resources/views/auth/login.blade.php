@extends('acceuille')

@section('content')

<div class="card">
    <div class="card-body">
        <h2>Se connecter</h2>
        <form action="{{ route('auth.login') }}" method="post" class="vstack gap-2">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button class="btn btn-primary">Se Connecter</button>
            <p>J'ai pas de compte ? <a href="{{ route ('auth.register')}}">Créer un compte</a></p>
        </form>
    </div>
</div>
@endsection
