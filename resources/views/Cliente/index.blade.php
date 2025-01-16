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
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product -> name}}</td>
            <td>{{$product -> description}}</td>
            <td>{{$product -> price}}</td>
            <td>{{$product -> stock}}</td>
            <td><a href="{{route('products.edit',$product->id)}}">Editar</a></td>
            <td><a href="{{route('products.show',$product->id)}}">Expande</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection