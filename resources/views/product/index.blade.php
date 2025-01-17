<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>
            <th scope="col">Estoque</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td scope="row">{{$product->name}}</td>
            <td scope="row">{{$product->description}}</td>
            <td scope="row">{{$product->price}}</td>
            <td scope="row">{{$product->stock}}</td>
            @can('product-edit')
                <td> <a href="{{route('products.edit', $product->id)}}">Editar</a></td>
            @endcan
            <td> <a href="{{route('products.show', $product->id)}}">Mostrar</a></td>
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
<a href="{{route('products.create')}}">Cadastrar</a>
@endsection
