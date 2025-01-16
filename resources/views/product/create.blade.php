<<<<<<< HEAD
<<<<<<< HEAD
<h1>Cadastro de Produto</h1>
@if ($errors->any())
    @foreach($errors->all() as $error)
        {{$error}} <br>
    @endforeach
@endif
<form action="{{route('products.store')}}" method="post">
    @csrf()
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" placeholder="Digite o nome do produto">
    <br>
    <label for="description">Descrição:</label>
    <br>
    <textarea id="description" name="description" rows="4" cols="50" placeholder="Digite a descrição do produto"></textarea>
    <br>
    <label for="price">Preço:</label>
    <input type="number" id="price" name="price" step="0.01" placeholder="Digite o preço do produto">
    <br>
    <label for="stock">Estoque:</label>
    <input type="number" id="stock" name="stock" placeholder="Digite a quantidade em estoque">
    <br><br>
    <input type="submit" value="Enviar">
</form>
=======
=======
@extends('product.layouts.app')
@section('content')
>>>>>>> 2a4f93b8fb605bcfddad5f202f05fb7643aeb22d
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Formulário de Produto</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do produto">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição:</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Digite a descrição do produto"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Digite o preço">
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Estoque:</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Digite a quantidade em estoque">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<<<<<<< HEAD
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
=======
@endsection 
>>>>>>> 2a4f93b8fb605bcfddad5f202f05fb7643aeb22d
