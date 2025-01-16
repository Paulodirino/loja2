@extends('product.layouts.app')
@section('content')
<h2>Formulário de Editar Produto</h2>
@if($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('products.update', $product->id)}}" method="post">
    @csrf
    @method("PUT")

    <label for="name">Nome:</label><br>
    <input type="text" id="name" name="name" required value="{{ $product->name }}"><br><br>

    <label for="description">Descrição:</label><br>
    <textarea id="description" name="description" required>{{ $product->description }}</textarea><br><br>

    <label for="price">Preço:</label><br>
    <input type="text" id="price" name="price" required value="{{ $product->price }}"><br><br>

    <label for="stock">Estoque:</label><br>
    <input type="number" id="stock" name="stock" required value="{{ $product->stock }}"><br><br>

    <input type="submit" value="Enviar">
</form>
<a href="{{ route('products.index') }}">Voltar</a>
@endsection 