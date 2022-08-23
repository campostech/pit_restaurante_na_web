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
                <label for="banner" class="col-md-12">Banner</label>
                <img src="" alt="" height="30px" id="banner-img" class="col-md-2">
                <input type="file" class="col-md-10" id="banner" required>
            </div>
            <div class="mb-3 col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="minhaempresa@email.com">
            </div>
            <div class="mb-3 col-md-3">
              <label for="phone">Telefone</label>
              <input type="text" class="form-control" id="phone" placeholder="(31) 99999-9999">
            </div>
            <div class="mb-3 col-md-3">
              <label for="whatsapp">Whatsapp</label>
              <input type="text" class="form-control" id="whatsapp" placeholder="(31) 99999-9999">
            </div>
        </div>

        <div class="mb-3">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="Castelo Branco, 423, Matozinhos - MG" required>
        </div>

        <div class="mb-3">
          <label for="maps">Link do Maps</label>
          <input type="text" class="form-control" id="maps" placeholder="https://maps.google.com/" required>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
              <label for="fundation">Fundação</label>
              <input type="text" class="form-control" id="fundation" placeholder="Fundada em 2022">
            </div>
            <div class="mb-3 col-md-4">
              <label for="objective">Objetivo</label>
              <input type="text" class="form-control" id="objective" placeholder="Buscar sempre agradar os clientes">
            </div>
            <div class="mb-3 col-md-4">
              <label for="effort">Empenho</label>
              <input type="text" class="form-control" id="effort" placeholder="Melhorar sempre é o nosso empenho">
            </div>
        </div>

        <div class="mb-3">
          <label for="about">Sobre a Empresa</label>
          <textarea class="form-control" id="about" required></textarea>
        </div>

        <div class="mb-3">
            <label for="products">Products</label>
            <button class="btn btn-success m-2">+</button>
            <div class="justify-content-center row" id="products">
                @foreach ([1,2,3,4] as $k)
                <div class="col-md-4 pb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <input class="card-title" value="Nome" />
                            <textarea class="card-text w-100 mb-3">Descrição do Produto</textarea>
                            <input class="card-title" value="Categoria" />
                            <a href="#" class="btn btn-danger">Remover</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
          </div>

        <div class="row">
            <div class="col-md-5 mb-3 row">
                <label for="favicon" class="col-md-12">Ícone do Site (Favicon)</label>
                <img src="" alt="" height="30px" id="favicon-img" class="col-md-2">
                <input type="file" class="col-md-10" id="favicon" required>
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

        <div class="mb-3 row">
            <div class="col-md-6">
              <label for="info">Informações da Empresa</label>
              <textarea class="form-control" id="info" required></textarea>
            </div>
            <div class="col-md-6">
              <label for="hours">Funcionamento</label>
              <textarea class="form-control" id="hours" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
              <label for="opnion1">Opinião 1</label>
              <input type="text" class="form-control" placeholder="Fulano">
              <input type="text" class="form-control" id="opnion1" placeholder="Muito bom, excelente">
            </div>
            <div class="mb-3 col-md-4">
              <label for="opnion2">Opinião 2</label>
              <input type="text" class="form-control" placeholder="Fulano">
              <input type="text" class="form-control" id="opnion2" placeholder="Muito bom, excelente">
            </div>
            <div class="mb-3 col-md-4">
              <label for="opnion3">Opinião 3</label>
              <input type="text" class="form-control" placeholder="Fulano">
              <input type="text" class="form-control" id="opnion3" placeholder="Muito bom, excelente">
            </div>
        </div>

        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="check">
          <label class="custom-control-label" for="check">Check</label>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Gerar</button>
      </form>
    </div>
  </div>
@endsection