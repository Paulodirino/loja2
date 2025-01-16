<<<<<<< HEAD
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Estoque</th>
=======
@extends('product.layouts.app')
@section('content')


@if($errors->any())
@foreach($errors->all() as $error)
{{ $error }}
@endforeach
@endif

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Atualizar</th>
            <th>Expande</th>
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
<<<<<<< HEAD
            <td scope="row">{{$product->name}}</td>
            <td scope="row">{{$product->description}}</td>
            <td scope="row">{{$product->price}}</td>
            <td scope="row">{{$product->stock}}</td>
            @can('product-edit')
                <td> <a href="{{route('products.edit', $product->id)}}">Editar</a></td>
            @endcan
            <td> <a href="{{route('products.show', $product->id)}}">Mostrar</a></td>
=======
            <td>{{$product -> name}}</td>
            <td>{{$product -> description}}</td>
            <td>{{$product -> price}}</td>
            <td>{{$product -> stock}}</td>
            <td><a href="{{route('products.edit',$product->id)}}">Editar</a></td>
            <td><a href="{{route('products.show',$product->id)}}">Expande</a></td>
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
        </tr>
        @endforeach
    </tbody>
</table>
<<<<<<< HEAD
<a href="{{route('products.create')}}">Cadastrar</a>
=======
@endsection
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
