Sistema {{session('client')['email']}}
@extends('template')
@section('content')
<div class="container">
    <div class="interior">
        <a class="btn" href="#modal">Abrir Modal</a>
    </div>
</div>
<div id="modal" class="modal-window">
    <div>
        <a href="#" title="Fechar" class="modal-close btn-danger text-light">Fechar</a>
        <h1>Preview de Imagem</h1>
        <div>
            <img id="previewImg" src="" alt="">
        </div>
    </div>
</div>

<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Criação de Website Restaurante</h2>
    <p class="lead">Preencha os campos abaixo e monte o seu site com a sua marca, cores e detalhes</p>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      <h4 class="mb-3">Informações do Cabeçalho</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="name">Nome da Empresa</label>
            <input type="text" class="form-control" id="name" placeholder="" value="" required>
          </div>
          <div class="col-md-6 mb-3 row">
            <label for="favicon" class="col-md-12">Ícone do Site (Favicon)</label>
            <img src="" alt="" height="30px" id="favicon-img" class="col-md-2">
            <input type="file" class="col-md-10" id="favicon" required>
        </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Opcional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="minhaempresa@email.com">
        </div>

        <div class="mb-3">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="Castelo Branco, 423, Matozinhos - MG" required>
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="dropdow">Dropdown</label>
            <select class="custom-select d-block w-100" id="dropdow" required>
              <option value="">Exemplo Drop...</option>
              <option>123</option>
            </select>
          </div>
          <div class="col-md-4 mb-3">
            <label for="mainColor" class="col-md-12">Cor Principal</label>
            <input type="color" id="mainColor" class="form-group" />
          </div>
          <div class="col-md-3 mb-3">
            <label for="textColor" class="col-md-12">Cor Secundaria</label>
            <input type="color" id="textColor" class="form-group" />
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="check">
          <label class="custom-control-label" for="check">Check</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
      </form>
    </div>
  </div>
@endsection