@extends('acceuille')

@section('content')

<div class="card">
    <div class="card-body">
        <h1>Inscription</h1>
        <form action="{{ route('auth.register') }}" method="post" class="vstack gap-2">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="passwordè_confirmation">Confirmation du mot de passe</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button class="btn btn-primary">S'inscrire</button>
            <h5 style="align-items: center, justify-content:center, display:flex, "><a href="{{ route ('auth.login')}}">J'ai un compte !</a></h5>
        </form>
    </div>

    @error('name')
        {{$message}}
    @enderror
</div>
@endsection
