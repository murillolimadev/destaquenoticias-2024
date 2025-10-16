 <!-- Header
      ================================================== -->
 <header class="clearfix">

     <div class="top-line">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-sm-9">
                     <ul class="info-list">
                         <li>
                             <span class="live-time"><i class="fa fa-calendar-o"></i>
                                 {{-- /* Mostra: vrijdag 22 december 1978 */ --}}
                                 {{ date('d/m/Y') }}
                             </span>
                         </li>
                         {{-- <li>
                             <a href="{{ route('home.pages.sobre.index') }}">Sobre</a>
                         </li> --}}
                         <li>
                             <a href="{{ route('home.pages.contatos.index') }}">Fale conosco</a>
                         </li>
                         {{-- <li>
                             <a href="" data-toggle="modal" data-target="#modalLogin">Login</a>
                         </li> --}}
                     </ul>
                 </div>
                 <div class="col-md-4 col-sm-3">
                     <ul class="social-icons">
                         <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class="header-banner-place">
         <div class="container">
             <a class="navbar-brand" href="/">
                 <img src="{{ asset('home/images/logo.png') }}" width="200" alt="">
             </a>

             <div class="advertisement" style="float: right;">
                 <a href="{{ route('home.pages.rifas.index') }}">
                     <img class="imagem" src="{{ asset('home/images/iphone.png') }}" alt="">
                 </a>
             </div>
         </div>
     </div>

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="/">Home</a>
                     </li>

                     <li class="nav-item">
                         <a class="nav-link world" href="{{ route('home.pages.cidade.index', 'brasil') }}">Brasil <i
                                 class="fa fa-angle-down" aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <ul class="filter-list">
                                     <li><a href="#">Vizualizar todas</a></li>
                                 </ul>
                                 <div class="row">
                                     @foreach ($brasil as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image">
                                                     <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                                         <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                             alt="" style="height: 150px;">
                                                     </a>
                                                     <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}"
                                                         class="category category-world">{{ $item->categoria->name }}</a>
                                                 </div>
                                                 <h2><a
                                                         href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                                 </h2>
                                                 <ul class="post-tags">
                                                     <li>
                                                         <i class="lnr lnr-user"></i>
                                                         <a href="#">Administrador</a>
                                                     </li>
                                                     {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                                 comments</span></a></li> --}}
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link sport" href="{{ route('home.pages.cidade.index', 'esporte') }}">Esporte <i
                                 class="fa fa-angle-down" aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <ul class="filter-list">
                                     <li><a href="#">Visualizar todas</a></li>
                                 </ul>
                                 <div class="row">
                                     @foreach ($esporte as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image">
                                                     <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                                         <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                             alt="" style="height: 150px;">
                                                     </a>
                                                     <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}"
                                                         class="category category-world">{{ $item->categoria->name }}</a>
                                                 </div>
                                                 <h2><a
                                                         href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                                 </h2>
                                                 <ul class="post-tags">
                                                     <li>
                                                         <i class="lnr lnr-user"></i>
                                                         <a href="#">Administrador</a>
                                                     </li>
                                                     {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                            comments</span></a></li> --}}
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link tech" href="{{ route('home.pages.cidade.index', 'maranhao') }}">Maranhão
                             <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                         <div class="mega-posts-menu">
                             <div class="posts-line">
                                 <div class="row">
                                     @foreach ($maranhao as $item)
                                         <div class="col-lg-3 col-md-6">
                                             <div class="news-post standart-post">
                                                 <div class="post-image">
                                                     <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                                         <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                             alt="" style="height: 150px;">
                                                     </a>
                                                     <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}"
                                                         class="category category-tech">{{ $item->categoria->name }}</a>
                                                 </div>
                                                 <h2><a
                                                         href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                                 </h2>
                                                 <ul class="post-tags">
                                                     <li><i class="lnr lnr-user"></i>
                                                         <a href="#">Administrador
                                                         </a>
                                                     </li>
                                                     {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23
                                                            comments</span></a></li> --}}
                                                 </ul>
                                             </div>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('home.pages.rifas.index') }}" class="nav-link tech"
                             href="#">Seja parceiro</a>
                     </li>

                     <li class="nav-item drop-link">
                         <a class="nav-link food" href="#">
                             Categorias
                             <i class="fa fa-angle-down" aria-hidden="true"></i>
                         </a>
                         <ul class="dropdown">
                             @foreach ($cidades as $item)
                                 <li><a
                                         href="{{ route('home.pages.cidade.index', $item->slug) }}">{{ $item->name }}</a>
                                 </li>
                             @endforeach
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('home.pages.app.index') }}">App</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link fashion" href="{{ route('home.pages.denuncia.create') }}">Denuncie</a>
                     </li>
                 </ul>
                 <form class="form-inline my-2 my-lg-0" action="{{ route('home.pages.search.index') }}" method="POST">
                     @csrf
                     <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search"
                         name="pesq">
                     <button class="btn btn-primary my-2 my-sm-0" type="submit"><i
                             class="fa fa-search"></i></button>
                 </form>
             </div>
         </div>
     </nav>
 </header>
 <!-- End Header -->


 <!-- Modal cadastro-->
 <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" style="z-index: 9999999">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="{{ route('login') }}" method="post">
                 @csrf
                 <div class="modal-body">

                     <div class="row">
                         <div class="col-md-12">
                             @if ($errors->any())
                                 <div class="alert alert-danger text-center" style="margin: 10px;">
                                     <ul>
                                         @foreach ($errors->all() as $error)
                                             <li style="text-align: center">{{ $error }}</li>
                                         @endforeach
                                     </ul>
                                 </div>
                             @endif
                             @if (session('msg'))
                                 <div class="row text-center">
                                     <div class="col-md-12" \>
                                         <div class="alert alert-success text-center"
                                             style="color: white; margin: 10px;">
                                             {{ session('msg') }}
                                         </div>
                                     </div>
                                 </div>
                             @endif
                         </div>
                         <div class="col-md-12">
                             <label for="">E-mail</label>
                             <input type="email" name="email" class="form-control">
                             <x-input-error :messages="$errors->get('name')" class="mt-2" />

                             <label for="">Senha</label>
                             <input type="password" name="password" class="form-control">
                             <x-input-error :messages="$errors->get('enail')" class="mt-2" />

                         </div>

                     </div><br>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                     <button type="submit" class="btn btn-primary">Entrar</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
