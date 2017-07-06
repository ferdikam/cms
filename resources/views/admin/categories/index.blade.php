@extends('layouts.admin')

@section('page-header')
    <div class="page-heading"><h2 class="title">Catégories</h2></div>
@endsection

@section('content')
    <div class="column is-three-quarters">
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
                                        <a class="button is-white">White</a>
                                        <a class="button is-light">Light</a>
                                        <a class="button is-dark">Dark</a>
                                        <a class="button is-black">Black</a>
                                        <a class="button is-link">Link</a>
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