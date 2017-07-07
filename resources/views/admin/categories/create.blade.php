@extends('layouts.admin')

@section('page-header')
    <div class="page-heading">
        <h2 class="title">Ajout d'une catégorie</h2>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">Créer une catégorie</div>
        </div>
        <div class="card-content">
            <form method="POST" action="{{ route('categories.store') }}">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Nom</label>
                    <p class="control">
                        <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}"
                               type="text" placeholder="Nom de la catégorie"
                               name="name" value="{{ old('name') }}" id="name"
                               required autofocus>
                        @if ($errors->has('name'))
                            <p class="help is-danger"><strong>{{ $errors->first('name') }}</strong></p>
                        @endif
                    </p>
                </div>

                <div class="field">
                    <label class="label">Catégorie Parente</label>
                    <p class="control">
                        <span class="select">
                            <select>
                                <option value="0">Choisir une catégorie parente</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
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
@endsection

