@extends('template')
@section('content')
<style>
    .section-download{
        margin-top: 20%;
        text-align: center;
    }
</style>
<div class="col-md-12 text-center">
    <div class="col-md-8 m-auto">
        <div class="col-md-12 section-download">
            <a class="btn btn-primary btn-lg" id="download" href='data:text/html;charset=UTF-8,' download="Página.html">Baixar Site Criado</a>
        </div>
        <cite class="col-md-12">Guarde esse arquivo, ele contém todos os dados cadastrados e o mesmo não fica salvo no servidor. Caso queira editar alguma informação no futuro, basta carregar esse arquivo para o sistema na página anterior.</cite>
        <br><br>
        <button class="btn btn-info" onclick="if(confirm('Tem certeza? Baixe o site antes de ir para criação de outro site'))window.location.href = '{{route('system')}}';">Ir Para Criação</button>
    </div>
</div>
<script>
    document.getElementById("download").href += encodeURIComponent( decodeURIComponent(atob("{{base64_encode($download)}}").split('').map(function(c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join('')));
    window.onbeforeunload = function(e) {
        return '';
    };
</script>
@endsection