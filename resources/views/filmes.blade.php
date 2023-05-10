@extends('app')

@section('content')
    <h1>Meus filmes favoritos</h1>
    <ul>
        @foreach ($filmes as $filme)
            <li>{{ $filme }}</li>
        @endforeach
    </ul>
@endsection
