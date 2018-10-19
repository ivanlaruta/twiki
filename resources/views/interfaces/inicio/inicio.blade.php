<!DOCTYPE html>
<html >
<head>
    <title>Wiki</title>
    <link rel='shortcut icon' href='{{URL::asset('favicon.ico')}}' />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">        
    <link href="{{asset('particles/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('particles/css/plugins/bootstrap.min.js')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('particles/css/style.css')}}" rel="stylesheet" type="text/css"/>
</head>
<style type="text/css">
    .sub { border-bottom: 2px solid #f24259; overflow:auto;}
    .bg {font-size: 69px;}
</style>
<body>
    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="logo" href="#">
                <img src="{{URL::asset('toyosa-logo.png')}}" alt="logo">          
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Inicio</a>
                    </li>
                    @foreach($categorias as $det)
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="{{$det->id}}">{{$det->nombre_corto}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-scroll-nav="600">Contacto</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header valign bg-img" data-scroll-index="0" data-overlay-dark="5" data-background="{{URL::asset('548862.jpg')}}" data-stellar-background-ratio="0.5">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="full-width text-center caption mt-30">
                    <h3>Centro de información</h3>
                    <h1 class="cd-headline clip">
                        <span class="blc">encuentra </span>
                        <span class="cd-words-wrapper">
                          <b class="is-visible">guias</b>
                          <b>manuales</b>
                          <b>procedimientos</b>
                        </span>
                    </h1>
                    <p>Un lugar sencillo en donde puedes encontrar lo que necesitas.</p>
                    <a href="#0" class="butn butn-bg">
                        <span>TOYOSA SA</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="arrow">
            <a href="#" data-scroll-nav="1">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </header>


    @foreach($categorias as $det)
        <section class="hero section-padding pb-0" data-scroll-index="{{$det->id}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="mission">
                        <div class="section-head mb-30">
                            <h4><span>{{$det->observacion}}</span><br>
                                {{$det->nombre_corto}}
                            </h4>
                        </div>
                        <p>{{$det->descripcion}}</p>
                        <a  class="vid" href="#area_{{$det->id}}">
                            <i class="icofont icofont-eye-alt"></i>
                            <span class="small-text">Categorias disponibles</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="skills">
                        <ul class="list-group list-group-flush">
                            @foreach($subcategorias as $det2) @if($det->id == $det2->id_category)
                            <p class="sub"><a href="javascript:;" onclick="generar('{{$det->id}}','{{$det2->id}}');" class="list-group-item list-group-item-action asd">{{$det2->nombre_corto}}<span class="icon" style="float: right;"><i class="icofont icofont-long-arrow-right"></i></span></a></p>
                            @endif @endforeach                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feat bg-gray pt-80 pb-50 mt-80" id="area_{{$det->id}}">
            <div class="container">
                <div class="row">
                    @foreach($subcategorias as $det2) @if($det->id == $det2->id_category)
                    <div class="col-lg-4">
                        <div class="item" onclick="generar('{{$det->id}}','{{$det2->id}}');">
                        <a href="javascript:;">
                            <span class="icon"><i class="{{$det2->icono}}"></i></span>
                            <h6>{{$det2->nombre_corto}}</h6>
                        </a>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>
        </div>
        <div class="quote bg-img section-padding" data-overlay-dark="8" data-background="{{URL::asset('particles/img/3.jpg')}}" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 text-center">
                        <h5>{{$det->descripcion}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <section class="price section-padding " >
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="item text-center">
                        <div class="value">
                            <h4 class="extra-text"> <span>WIKI</span> Toyosa.</h4>
                            <p>Contamos con un repositorio de manuales, guias y procedimientos para el funcionamiento de nuestros sistemas y procesos.</p>
                        </div>
                        <div class="order">
                            <a href="{{ url('/login') }}">
                                <span>Gestionar Archivos</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="information bg-img" data-overlay-dark="9" data-background="{{URL::asset('548862.jpg')}}" data-scroll-index="600">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-live-support"></i></span>
                            <div class="cont">
                                <h6>Soporte</h6>
                                <p>+591 2 2390930 Int. 2005{{-- <br>+591 777 56103 --}}</p>
                                <p>ivan.laruta@toyosa.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-map"></i></span>
                            <div class="cont">
                                <h6>Direccion</h6>
                                <p>Plaza Venxuela, #1413 <br> La Paz, Bolivia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <a href="">
                    <div class="info">
                        <div class="item">
                            <span class="icon"><i class="icofont icofont-phone"></i></span>
                            <div class="cont">
                                <h6>Internos</h6>
                                <p>Lista internos <br> La Paz, oficina central</p>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <a class="logo" href="#">
                <img src="{{URL::asset('toyosa-logo.png')}}" alt="logo">          
            </a>
            <div class="social">
                <a href="#0"><i class="icofont icofont-social-facebook"></i></a>
                <a href="#0"><i class="icofont icofont-social-twitter"></i></a>
                <a href="#0"><i class="icofont icofont-social-instagram"></i></a>
                <a href="#0"><i class="icofont icofont-brand-linkedin"></i></a>
                <a href="#0"><i class="icofont icofont-social-behance"></i></a>
            </div>
            <p>&copy; 2018 O&M - SISTEMAS, todos los derechos reservados. TOYOSA SA</p>
        </div>
    </footer>

    <div class="modal fade modal_descarga" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content contenido_descarga"></div>
        </div>
    </div>

    <script src="{{asset('particles/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('particles/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('particles/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('particles/js/popper.min.js')}}"></script>
    <script src="{{asset('particles/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('particles/js/scrollIt.min.js')}}"></script>
    <script src="{{asset('particles/js/animated.headline.js')}}"></script>
    <script src="{{asset('particles/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('particles/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('particles/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('particles/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('particles/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('particles/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('particles/js/particles.min.js')}}"></script>
    <script src="{{asset('particles/js/app.js')}}"></script>
    <script>
        var baseURL = "{{URL::asset('toyosa-logo.png')}}";
        var baseURL2 = "{{URL::asset('toyosa-logo2.png')}}";
    </script>
    <script src="{{asset('particles/js/scripts.js')}}"></script>
    
    <script type="text/javascript">
    function generar(categoria,subcategoria) {
        // console.log(categoria,subcategoria);
        var modal=$(".modal_descarga");
        var modalContent = $(".contenido_descarga");
        $.ajax({
            type: "GET",
            cache: false,
            dataType: "html",
            url: "{{ route('modal_descarga')}}",
            data: {
                categoria: categoria,
                subcategoria: subcategoria
            },
            success: function(dataResult)
            {
                modalContent.empty().html(dataResult);                        
                modal.modal('show');
            },
            error: function (error) {
               alert('error; ' + eval(error));
            }
        });
    };


    </script>
</body>
</html>
