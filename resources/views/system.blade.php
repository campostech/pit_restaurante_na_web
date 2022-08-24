Sistema {{session('client')['email']}}
@extends('template')
@section('content')
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
      <form class="needs-validation">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name">Nome da Empresa</label>
                <input type="text" class="form-control" id="name" placeholder="Restaurante XPTO" value="" required>
            </div>
            <div class="col-md-6 mb-3 row">
                <label for="banner" class="col-md-12">Banner</label>
                <a href="#modal" class="col-md-2">
                    <img src="" alt="" height="30px" id="banner-img">
                </a>
                <input type="file" class="col-md-10" id="banner" required>
            </div>
            <div class="mb-3 col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="minhaempresa@email.com" required>
            </div>
            <div class="mb-3 col-md-3">
              <label for="phone">Telefone</label>
              <input type="text" class="form-control" id="phone" placeholder="(31) 99999-9999" required>
            </div>
            <div class="mb-3 col-md-3">
              <label for="whatsapp">Whatsapp</label>
              <input type="text" class="form-control" id="whatsapp" placeholder="(31) 99999-9999" required>
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
              <input type="text" class="form-control" id="fundation" placeholder="Fundada em 2022" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="objective">Objetivo</label>
              <input type="text" class="form-control" id="objective" placeholder="Buscar sempre agradar os clientes" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="effort">Empenho</label>
              <input type="text" class="form-control" id="effort" placeholder="Melhorar sempre é o nosso empenho" required>
            </div>
        </div>

        <div class="mb-3">
          <label for="about">Sobre a Empresa</label>
          <textarea class="form-control" id="about" required></textarea>
        </div>

        <div class="mb-3">
            <label for="products">Products</label>
            <button class="btn btn-success m-2" type="button" onclick="addProduct()">+</button>
            <div class="justify-content-center row border pt-4" id="products"></div>
          </div>

        <div class="row">
            <div class="col-md-6 mb-3 row">
                <label for="favicon" class="col-md-12">Ícone do Site (Favicon)</label>
                <a href="#modal" class="col-md-2">
                    <img src="" alt="" height="30px" id="favicon-img">
                </a>
                <input type="file" class="col-md-10" id="favicon" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="mainColor" class="col-md-12">Cor Principal</label>
                <input type="color" id="mainColor" class="form-group"  required/>
            </div>
            <div class="col-md-3 mb-3">
                <label for="textColor" class="col-md-12">Cor Secundaria</label>
                <input type="color" id="textColor" class="form-group"  required/>
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
              <input type="text" class="form-control" placeholder="Fulano" required>
              <input type="text" class="form-control" id="opnion1" placeholder="Muito bom, excelente" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="opnion2">Opinião 2</label>
              <input type="text" class="form-control" placeholder="Fulano" required>
              <input type="text" class="form-control" id="opnion2" placeholder="Muito bom, excelente" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="opnion3">Opinião 3</label>
              <input type="text" class="form-control" placeholder="Fulano" required>
              <input type="text" class="form-control" id="opnion3" placeholder="Muito bom, excelente" required>
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
  <script>
    function previewImg(){
        $("#previewImg").attr("src", this.querySelector("img").src);
    }

    function readFile(){
        if (!this.files || !this.files[0]) return;
        let getBase64 = new Promise((resolve, reject) => {
        const reader = new FileReader();
            reader.readAsDataURL(this.files[0]);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        }).then((data) => {
            document.getElementById(this.id+ "-img").src = data;
        });
    }
    let inputsFile = document.querySelectorAll("input[type=file]");
    for (let index = 0; index < inputsFile.length; index++) {
        const element = inputsFile[index];
        element.addEventListener("change", readFile);
        element.parentNode.querySelector("a[href='#modal']").addEventListener("click", previewImg);
    }
    
    window.onbeforeunload = function(e) {
        return '';
    };
  </script>
@endsection