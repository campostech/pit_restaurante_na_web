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
      <form id="form" class="needs-validation" method="POST" action="{{route('system.generate')}}">
        @csrf
       <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name">Nome da Empresa</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Restaurante XPTO" value="" required>
            </div>
            <div class="col-md-6 mb-3 row">
                <label for="banner" class="col-md-12">Banner</label>
                <a href="#modal" class="col-md-2">
                    <img src="" alt="" height="30px" id="banner-img">
                </a>
                <input type="text" name="banner" class="d-none" required>
                <input type="file" class="col-md-10" id="banner">
            </div>
            <div class="mb-3 col-md-6">
              <label for="email">Email</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="minhaempresa@email.com" required>
            </div>
            <div class="mb-3 col-md-3">
              <label for="phone">Telefone</label>
              <input name="phone" type="text" class="form-control" id="phone" placeholder="(31) 99999-9999" required>
            </div>
            <div class="mb-3 col-md-3">
              <label for="whatsapp">Whatsapp</label>
              <input name="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="(31) 99999-9999" required>
            </div>
        </div>

        <div class="mb-3">
          <label for="address">Endereço</label>
          <input name="address" type="text" class="form-control" id="address" placeholder="Castelo Branco, 423, Matozinhos - MG" required>
        </div>

        <div class="mb-3">
          <label for="maps">Link do Maps</label>
          <input name="maps" type="text" class="form-control" id="maps" placeholder="https://maps.google.com/" required>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
              <label for="fundation">Fundação</label>
              <input name="fundation" type="text" class="form-control" id="fundation" placeholder="Fundada em 2022" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="objective">Objetivo</label>
              <input name="objective" type="text" class="form-control" id="objective" placeholder="Buscar sempre agradar os clientes" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="effort">Empenho</label>
              <input name="effort" type="text" class="form-control" id="effort" placeholder="Melhorar sempre é o nosso empenho" required>
            </div>
        </div>

        <div class="mb-3">
          <label for="about">Sobre a Empresa</label>
          <textarea name="about" class="form-control" id="about" required></textarea>
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
                <input type="text" name="favicon" class="d-none" required>
                <input type="file" class="col-md-10" id="favicon">
            </div>
            <div class="col-md-3 mb-3">
                <label for="mainColor" class="col-md-12">Cor Principal</label>
                <input name="mainColor" type="color" id="mainColor" class="form-group"  required/>
            </div>
            <div class="col-md-3 mb-3">
                <label for="secondColor" class="col-md-12">Cor Secundaria</label>
                <input name="secondColor" type="color" id="secondColor" class="form-group"  required/>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-md-6">
              <label for="info">Informações da Empresa</label>
              <textarea name="info" class="form-control" id="info" required></textarea>
            </div>
            <div class="col-md-6">
              <label for="hours">Funcionamento</label>
              <textarea name="hours" class="form-control" id="hours" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
              <label for="opinion0">Opinião 1</label>
              <input name="opinions[0][n]" type="text" class="form-control" placeholder="Fulano" required>
              <input name="opinions[0][o]" type="text" class="form-control" id="opinion0" placeholder="Muito bom, excelente" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="opinion1">Opinião 2</label>
              <input name="opinions[1][n]" type="text" class="form-control" placeholder="Fulano" required>
              <input name="opinions[1][o]" type="text" class="form-control" id="opinion1" placeholder="Muito bom, excelente" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="opinion2">Opinião 3</label>
              <input name="opinions[2][n]" type="text" class="form-control" placeholder="Fulano" required>
              <input name="opinions[2][o]" type="text" class="form-control" id="opinion2" placeholder="Muito bom, excelente" required>
            </div>
        </div>

        <hr class="mb-4">
        {{-- <div class="custom-control custom-checkbox">
          <input name="check" type="checkbox" class="custom-control-input" id="check" required>
          <label class="custom-control-label" for="check">Concordo com todos os term</label>
        </div>
        <hr class="mb-4"> --}}
        <div class="row">
            <button class="btn btn-secondary btn-lg btn-block col-md-6" type="button" onclick="preview()">Visualizar</button>
            <button class="btn btn-primary btn-lg btn-block col-md-6 m-0" type="submit">Gerar</button>
        </div>
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
            document.getElementsByName(this.id)[0].value = data;
        });
    }
    let inputsFile = document.querySelectorAll("input[type=file]");
    for (let index = 0; index < inputsFile.length; index++) {
        const element = inputsFile[index];
        element.addEventListener("change", readFile);
        element.parentNode.querySelector("a[href='#modal']").addEventListener("click", previewImg);
    }

    function addProduct() {
        let model = 
        `<div class="col-md-4 pb-4 product">
            <div class="card">
                <div class="card-body text-center">
                    <input class="card-title" cat="name" placeholder="Nome"  required/>
                    <textarea class="card-text w-100 mb-3" cat="description" required placeholder="Descrição do Produto"></textarea>
                    <input type="number" class="card-title" cat="price" placeholder="Preço"  required/>
                    <input class="card-title" cat="category" placeholder="Categoria"  required/>
                    <button type="button" onclick="removeProduct(event.target)" class="btn btn-danger">Remover</button>
                </div>
            </div>
        </div>`;

        $("#products").append(model);
        reorderProducts();
    }

    function reorderProducts(){
        $(".product").each(function( i ) {
            $(this).find("[cat]").each( function (c) {
                this.name = "products["+i+"]["+$(this).attr("cat")+"]";
            });
        });
    }

    function removeProduct(evt) {
        if (confirm("Realmente deseja remover o produto? (Essa ação não pode ser desfeita)")) {
            evt.parentNode.parentNode.parentNode.remove();
            reorderProducts();
        }
    }
    
    window.onbeforeunload = function(e) {
        return '';
    };
    
    function autofill(){
        for (let index = 0; index < 4; index++) {
            addProduct();
        }
        $("input").each(function (i) {
            try {
                if($(this).val() == ""){
                    $(this).val(this.type == "number" ? i : i+"-"+this.placeholder);
                }
            } catch (error) {}
        });
        $("textarea").each(function (i) {
            try {
                $(this).text(i+"-"+this.placeholder);
            } catch (error) {}
        });
    }
    autofill();
    
    function preview() {
        let pForm = $('#form').clone();
        $(pForm).find("[required]").each(function () {
            $(this).removeAttr("required");
        });
        pForm.attr("id", "previewForm");
        pForm.attr("target", "print_popup");
        pForm.attr("onsubmit", "window.open('about:blank','print_popup','width=1000,height=800');");
        $("body").append(pForm);
        $("#previewForm").submit();
        $("#previewForm").remove();
    }
  </script>
@endsection