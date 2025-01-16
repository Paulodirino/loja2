<<<<<<< HEAD
<h1>Produto</h1>
<label for="name">Nome:</label>
<input type="text" id="name" name="name" placeholder="Digite o nome do produto" value="{{$product->name}}" readonly>
<br>
<label for="description">Descrição:</label>
<br>
<textarea id="description" name="description" rows="4" cols="50" placeholder="Digite a descrição do produto" readonly>{{$product->description}}</textarea>
<br>
<label for="price">Preço:</label>
<input type="number" id="price" name="price" step="0.01" placeholder="Digite o preço do produto" value="{{$product->price}}" readonly>
<br>
<label for="stock">Estoque:</label>
<input type="number" id="stock" name="stock" placeholder="Digite a quantidade em estoque" value="{{$product->stock}}" readonly>
<br><br>
<form action="{{route('products.destroy', $product->id)}}" method="post">
    @csrf()
    @method('DELETE')
=======
<h2>Formulário de Produto</h2>
@if($errors->any())
    @foreach($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif

<!-- Formulário de visualização do produto -->
<form>
    <label for="name">Nome:</label><br>
    <input type="text" id="name" name="name" readonly value="{{ $product->name }}"><br><br>

    <label for="description">Descrição:</label><br>
    <textarea id="description" name="description" readonly>{{ $product->description }}</textarea><br><br>

    <label for="price">Preço:</label><br>
    <input type="text" id="price" name="price" readonly value="{{ $product->price }}"><br><br>

    <label for="stock">Estoque:</label><br>
    <input type="number" id="stock" name="stock" readonly value="{{ $product->stock }}"><br><br>

    <a href="{{ route('products.index') }}">Voltar</a>
</form>

<!-- Formulário de exclusão do produto -->
<form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este produto?')">
    @csrf
    @method("DELETE")
>>>>>>> ef35e66832508c1ac775cc42ec25220279364dd7
    <input type="submit" value="Excluir">
</form>