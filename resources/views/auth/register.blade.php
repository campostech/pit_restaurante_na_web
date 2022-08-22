@extends('template')
@section('content')
<section class="form-main">
    <div>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <form action="{{ route('user.store') }}" method="POST" class="form-sub-main">
                    @csrf
                    <div class="col-md-12 text-center text-light">
                        <h2>Registro de Conta</h2>
                    </div>
                    <div class="form-group">
                        <label for="email">Email da Conta</label>
                        <input id="email" name="email" value="{{old('email')}}" class="form-control p-0 mb-0" type="email" placeholder="Insira seu email" required="true" aria-required="true">
                    </div>
                    @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                    @enderror
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input id="password" name="password" value="{{old('password')}}" class="form-control p-0 mb-0" type="password" placeholder="Insira sua senha" required="true" aria-required="true">
                    </div>
                    @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                    @enderror
                    <div class="form-group">
                        <label for="c_password">Confirmação de Senha</label>
                        <input id="c_password" name="c_password" value="{{old('c_password')}}" class="form-control p-0 mb-0" type="password" placeholder="Confirme sua senha" required="true" aria-required="true">
                    </div>
                    @error('c_password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> 
                    @enderror
                    <div class="form-group col-md-12 mt-2">
                        <button class="btn btn-success w-100">Cadastrar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection