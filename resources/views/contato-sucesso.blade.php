@extends('app')

@section('content')
    <h1>Mensagem enviada com sucesso</h1>
    <p>Nome: {{ $name }}</p>
    <p>E-mail: {{ $email }}</p>
    <p>Mensagem: {{ $message }}</p>
@endsection
