@extends('template')
@section('content')
<section class="form-main">
    <div>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <form action="{{ route('user.signin') }}" method="POST" class="form-sub-main">
                    @csrf
                    <div class="col-md-12 text-center">
                        <a href="#">
                        <img src="assets/images/vector.png">
                        </a>
                    </div>
                    <div class="form-group">
                        <input id="email" name="email" class="form-control mb-0" type="text" placeholder="Enter Email" required="" aria-required="true">
                    </div>

                    <div class="form-group text-right">                      
                        <a href="#" class="pas-text">Esqueceu sua senha?</a>                        
                        <input id="password" type="password" class="form-control mt-0" name="password" placeholder="********" required="required">
                    </div>

                    <div class="form-group col-md-12">
                        <button class="btn btn-success w-100">Entrar</button>
                    </div>
                    <div class="form-group col-md-12 mt-2">
                        <a href="{{route('user.create')}}" class="btn btn-info w-100">Cadastrar</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>
@if (isset($_GET["e"]) && $_GET["e"] == true)
    <script>
        alert("Usuário não encontrado, revise os dados inseridos (Email e Senha).")
    </script>
@endif
@endsection