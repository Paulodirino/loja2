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
    <input type="submit" value="Excluir">
</form>