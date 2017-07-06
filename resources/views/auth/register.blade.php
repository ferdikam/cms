@extends('layouts.admin')

@section('page-header')
    <div class="page-heading"><h2 class="title">S'enregistrer</h2></div>
@endsection

@section('content')
<div class="column is-one-third is-offset-one-third">
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">Enregistrer</div>
        </div>
        <div class="card-content">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Nom complet</label>
                    <p class="control">
                        <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" placeholder="Nom complet"
                               name="name" value="{{ old('name') }}" id="name"
                               required autofocus>
                        @if ($errors->has('name'))
                            <p class="help is-danger"><strong>{{ $errors->first('name') }}</strong></p>
                        @endif
                    </p>
                </div>

                <div class="field">
                    <label class="label">Adresse électronique</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text"
                               placeholder="Votre adresse électronique"
                               name="email" value="{{ old('email') }}" id="email"
                               required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                        @if ($errors->has('email'))
                            <span class="icon is-small is-right">
                                <i class="fa fa-warning"></i>
                            </span>

                            <p class="help is-danger"><strong>{{ $errors->first('email') }}</strong></p>
                        @endif
                    </p>
                </div>

                <div class="field">
                    <label class="label">Mot de passe</label>
                    <p class="control has-icons-left">
                        <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password"
                               placeholder="Votre mot de passe"
                               name="password" id="password" required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                        @if ($errors->has('password'))
                            <span class="icon is-small is-right">
                                <i class="fa fa-warning"></i>
                            </span>

                            <p class="help is-danger"><strong>{{ $errors->first('password') }}</strong></p>
                        @endif
                    </p>
                </div>

                <div class="field">
                    <label class="label">Confirmation mot de passe</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password"
                               placeholder="Confirmer votre mot de passe"
                               name="password_confirmation" id="password-confirm"
                               required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>
                <hr>
                <div class="field">
                    <p class="control">
                        <button class="button is-primary">
                            Enregistrer
                        </button>
                    </p>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
