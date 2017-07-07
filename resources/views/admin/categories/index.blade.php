@extends('layouts.admin')

@section('page-header')
    <div class="page-heading">
        <h2 class="title">Catégories <span><a href="{{ route('categories.create') }}" class="button is-primary">Ajouter</a></span></h2>
    </div>
@endsection

@section('content')
    <div class="column is-10 is-offset-1">
        <div class="card">
            <div class="card-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <th>{{ $category->name }}</th>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <div class="block">
                                        <a href="#" class="button is-info"><i class="fa fa-eye"></i></a>
                                        <a class="button is-warning"><i class="fa fa-edit"></i></a>
                                        <a class="button is-danger" data-target="modal-{{ $category->id }}"><i class="fa fa-trash-o"></i></a>
                                        <div class="modal" id="modal-{{ $category->id }}">
                                            <div class="modal-background"></div>
                                            <div class="modal-content">
                                                Voulez-vous supprimer la catégorie <strong>{{ $category->name }}</strong>
                                            </div>
                                            <button class="modal-close is-large"></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection