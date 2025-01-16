<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-dark fw-semibold" href="{{ route('dashboard') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="{{ route('products.index') }}">Listar Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-semibold" href="{{ route('products.create') }}">Cadastrar Produto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
