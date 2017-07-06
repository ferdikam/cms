@extends('layouts.admin')

@section('content')
    <div class="column is-one-third is-offset-one-third">
        <div class="card">
            <div class="card-header">
                <div class="card-header-title">Se connecter</div>
            </div>
            <div class="card-content">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

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


                    <hr>
                    <div class="field">
                        <p class="control">
                            <button class="button is-primary">
                                Connexion
                            </button>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

