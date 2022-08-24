<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Northstreet Restaurant">
    <meta name="author" content="A.K.">

    <title>{{$name}}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{$favicon}}"" />
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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">{{$name}}</a>
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
                    <a class="nav-link" href="#testimonials">Opiniões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron" style="background-image: url('{{$banner}}')">
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
            <div class="row">

                <!-- Nav pills -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#breakfast">Breakfast</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#lunch">Lunch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#dinner">Dinner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#dessert">Dessert</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#salads">Salads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#drinks">Drinks</a>
                    </li>
                </ul>
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
                    <h4>Fundação</h4>
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
            <a href="#contact" class="btn">Contate-Nos</a>
        </div>
    </section>

    <section class="bg-testimonials" id="testimonials">
        <div class="container-fluid">
            <h3 class="">O que dizem sobre nós</h3>
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

    <section class="bg-contact bg-section" id="contact">
        <div class="container-fluid">
            <h1 class="container-h1">Contate-Nos</h1>
            <div class="row slideanim justify-content-center text-center">
                <div class="col-md-6 col-sm-6 contact-left">
                    <div class="left-box">
                        <address class="contact">
                            <span class="span-contact">Telefone:</span>
                            <br>
                            {{$phone}}
                            <br> 
                            <span class="span-contact">Email:</span> 
                            <br>
                            {{$email}}
                            <br>
                            <span class="span-contact">Endereço:</span>  
                            <br>
                            {{$address}}
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
                                {{$address}}
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
                    <textarea class="col-md-8" readonly>{{$hours}}</textarea>
                </div>
            </div>
        </div>

        <a class="to-top" href="#myPage" title="toTop">
            <i class="fa fa-chevron-up"></i>
        </a>
    </footer>

    <div class="footer-copyright">
        <p>&copy 2022 Tema feito por <a href="https://github.com/anttnew"> Anttnew</a> - Site Criado pelo <a href="">Restaurante na Web</a> / <a href="">Lucas Campos</a></p>
    </div>

    <script src="script.js"></script>

</body>

</html>