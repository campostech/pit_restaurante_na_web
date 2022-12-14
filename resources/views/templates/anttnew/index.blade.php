<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$name}}">
    <meta id="siteData" content="{{$siteData}}">
    <title>{{$name}}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{$favicon}}" />
    <base href="{{asset('t-assets/anttnew')}}/">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    @include('templates.anttnew.style')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        :root{
            --mainColor: {{$mainColor}};
            --secondColor: {{$secondColor}};
        }
    </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <script>
        function sendWhatsapp(msg) {
            let url = "https://api.whatsapp.com/send/?phone=+55"+"{{$whatsapp}}".replace(/\D/g, "")+"&text="+encodeURI(msg);    
            window.open(url, '_blank');
        }
        function buyMessage(element){
            let parent = element.parentNode;
            let msg = "Ol?? {{$name}}!\n\nGostaria do "+parent.getElementsByClassName("name")[0].innerHTML+"\nVi que custa "+parent.getElementsByClassName("price")[0].innerHTML;
            sendWhatsapp(msg);
        }
    </script>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="#home">{{$name}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Opini??es</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron" id="home" style="background-image: url('{{$banner}}')">
        <div class="container-fluid">
            <div class="header-content-inner">
            </div>
        </div>
    </div>

    <section class="bg-about bg-section" id="about">
        <div class="container-fluid">
            <h1 class="container-h1">Sobre</h1>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row ">
                        <div class="restaurant-history slideanim text-center">
                            <p class="about-history first">{{$about}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-menu bg-section" id="menu">
        <div class="container-fluid">
            <h1 class="container-h1">Menu</h1>
            <div class="justify-content-center col-md-12 row border pt-4" id="products">
                <div class="row mb-4 justify-content-center col-md-12">
                    <div class="col-md-3 p-0 menu-cat active">
                        <a class="col-md-12 m-0 btn" cat="*" onclick="clickMenu(event.target)">TODOS</a>
                    </div>
                    @foreach ($categories as $category)
                    <div class="col-md-3 p-0 menu-cat">
                        <a class="col-md-12 m-0 btn" cat="{{$category}}" onclick="clickMenu(event.target)">{{strtoupper($category)}}</a>
                    </div>
                    @endforeach
                </div>
                @foreach ($products as $p)
                <div class="col-md-4 pb-4 product" cat="{{$p["category"]}}">
                    <div class="card">
                        <div class="card-body text-center">
                            <strong><p class="card-title w-100 name">{{$p["name"]}}</p></strong>
                            <cite class="card-text w-100 mb-3">{{$p["description"]}}</cite>
                            <p class="card-title price">R${{$p["price"]}}</p>
                            <a class="btn btn-success text-second mb-0" onclick="buyMessage(event.target)">Comprar</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-service bg-section" id="service">
        <div class="container-fluid text-center">
            <h1 class="container-h1">+ Sobre a {{$name}}</h1>

            <div class="row service-round-3 slideanim">
                <div class="col-sm-4 text-center round">
                    <div class="service-round b-party">
                        <i class="fa fa-4x fa fa-birthday-cake sr-icons"></i>
                    </div>
                    <h4>Funda????o</h4>
                    <p>{{$fundation}}</p>
                </div>
                <div class="col-sm-4 text-center round">
                    <div class="service-round wedding">
                        <i class="fa fa-4x fa fa-heart sr-icons"></i>
                    </div>
                    <h4>Objetivo</h4>
                    <p>{{$objective}}</p>
                </div>
                <div class="col-sm-4 text-center round">
                    <div class="service-round b-dinner">
                        <i class="fa fa-4x fa fa-suitcase  sr-icons"></i>
                    </div>
                    <h4>Empenho</h4>
                    <p>{{$effort}}</p>
                </div>
            </div>
            <button onclick="sendWhatsapp('Ol?? {{$name}}!\nVi o site de voc??s e gostaria de entrar em contato!')" class="btn">Contate-Nos</button>
        </div>
    </section>

    <section class="bg-testimonials" id="testimonials">
        <div class="container-fluid">
            <h3 class="">O que dizem sobre n??s</h3>
            <hr class="hr-testimonials">
            <div class="row slideanim">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ul>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach ($opinions as $key => $item)
                        <div class="carousel-item {{array_key_first($opinions) == $key ? 'active' : ''}}">
                            <h4>{{$item["o"]}}</h4>
                            <h5>{{$item["n"]}}</h5>
                        </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-contact bg-section mb-4" id="contact">
        <div class="container-fluid">
            <h1 class="container-h1">Contate-Nos</h1>
            <div class="row slideanim justify-content-center text-center">
                <div class="col-md-6 col-sm-6 contact-left">
                    <div class="left-box">
                        <address class="contact">
                            <span class="span-contact">Telefone:</span>
                            <br>
                            <a class="text-second" href="tel:{{$phone}}">{{$phone}}</a>
                            <br> 
                            <span class="span-contact">Email:</span> 
                            <br>
                            <a class="text-second" href="mailto:{{$email}}">{{$email}}</a>
                            <br>
                            <span class="span-contact">Endere??o:</span>  
                            <br>
                            <a class="text-second" href="{{$maps}}">{{$address}}</a>
                        </address>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="-bg-footer" id="footer">
        <div class="container-fluid">
            <div class="row footer-align">
                <div class="col-md-4 col-sm-4">
                    <h5>{{$name}}</h5>
                    <hr class="hr-foot">
                    <div class="footer-items col-md-10">
                        <p class="footer">{{$info}}</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <h5>Nossos Contatos</h5>
                    <hr class="hr-foot">
                    <div class="footer-items">
                        <address>
                                <a href="{{$maps}}">{{$address}}</a>
                                <br>
                                <a href="tel:{{$phone}}"><i class="fa fa-phone address"></i>{{$phone}}</a>
                                <br>
                                <a href="mailto:{{$email}}"><i class="fa fa-envelope address"></i>{{$email}}</a>
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 text-center">
                    <h5>Funcionamento</h5>
                    <hr class="hr-foot">
                    <div class="col-md-12">{!! str_replace("\n","<br>",strip_tags($hours)) !!}</div>
                </div>
            </div>
        </div>

        <a class="to-top" href="#myPage" title="toTop">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>

    <div class="footer-copyright">
        <p>&copy {{now()->year}} Tema feito por <a href="https://github.com/anttnew"> Anttnew</a> - Site Criado pelo <a href="{{route('system')}}">Restaurante na Web</a> / <a href="https://campostech.com.br/fundador">Lucas Campos</a></p>
    </div>

    @include('templates.anttnew.script')

</body>

</html>