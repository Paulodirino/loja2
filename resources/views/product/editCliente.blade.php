<h1>Editar Cliente</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('clientes.update', $client->id }}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Digite o nome do cliente" value="{{ $client->name }}">
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Digite o e-mail do cliente" value="{{$client->email}}">
    </div>

    <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="Digite o telefone do cliente" value="{{ $client->phone }}">
    </div>

    <div class="form-group">
        <label for="address">Endereço:</label>
        <textarea id="address" name="address" class="form-control" rows="3" placeholder="Digite o endereço do cliente">{{$client->address }}</textarea>
    </div>

    <div>
        <input type="submit" class="btn btn-primary" value="Atualizar Cliente">
    </div>
</form>
