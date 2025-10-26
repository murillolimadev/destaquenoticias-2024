    <!-- footer
       ================================================== -->
    <footer>
        <div class="container">

            <div class="up-footer">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget text-widget">
                            <h1>
                                <a href="?">
                                    <img src="{{ asset('home/images/logo.png') }}" width="100" alt=""></a>
                            </h1>
                            <p>
                                O diário de notícias na internet trazendo notícias em geral.
                            </p>
                            <ul class="social-icons">
                                <li><a class="facebook"
                                        href="https://www.facebook.com/profile.php?id=100090408518901&paipv=0&eav=Afa9vIoaTtn8DF3Kc-IQFYBFWCdby_19D9jf9F8BoI_c4f3vhatO7coQjXawdB5yhA0"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget popular-widget">
                            <h1>NOTÍCIAS POPULARES</h1>
                            <ul class="small-posts">
                                @foreach ($noticiasrodape as $item)
                                    <li>
                                        <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                            <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                style="width: 100%; height: 80px;">
                                        </a>
                                        <div class="post-cont">
                                            <h2><a
                                                    href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li>
                                                    {{-- <i class="lnr lnr-user"></i><a href="index.html#">Renata da
                                                        Silva</a> --}}
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget featured-widget">
                            <h1>NOTÍCIA EM DESTAQUE</h1>
                            <div class="news-post standart-post">
                                <div class="post-image">
                                    <a href="{{ route('home.pages.noticias.view', [$destaque->slug]) }}">
                                        <img src="{{ asset('upload/noticias/' . $destaque->img) }}"
                                            style="width: 100%; height: 120px;" alt="">
                                    </a>
                                    <a href="#"
                                        class="category category-travel">{{ $destaque->categoria->name }}</a>
                                </div>
                                <h2><a
                                        href="{{ route('home.pages.noticias.view', [$destaque->slug]) }}">{{ $destaque->title }}</a>
                                </h2>
                                <ul class="post-tags">
                                    {{-- <li><i class="lnr lnr-user"></i><a href="#">Renata da Silva</a></li> --}}
                                    {{-- <li><a href="index.html#"><i class="lnr lnr-book"></i><span>23 comments</span></a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget tags-widget">
                            <h1>Tags</h1>
                            <ul class="tags-list">
                                @foreach ($categorias as $item)
                                    <li>
                                        <a
                                            href="{{ route('home.pages.cidade.index', $item->slug) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <br>
                            {{-- <iframe
                                src="https://api.wo-cloud.com/content/widget/?geoObjectKey=2582046&language=pt&region=BR&timeFormat=HH:mm&windUnit=kmh&systemOfMeasurement=metric&temperatureUnit=celsius"
                                name="CW2" scrolling="no" width="290" height="318" frameborder="0"
                                style=""></iframe> --}}

                            tempo
                        </div>
                    </div>

                </div>
            </div>

            <div class="down-footer">
                <ul class="list-footer">
                    <li><a href="/">Home</a></li>
                    {{-- <li><a href="{{ route('home.pages.sobre.index') }}">Sobre</a></li> --}}
                    <li>
                        <a href="{{ route('home.pages.privacy.index') }}">
                            Política de Privacidade
                        </a>
                    </li>
                    <li><a href="{{ route('home.pages.contatos.index') }}">Fale conosco</a></li>
                </ul>
                <p>&copy; Copyright Destaque Noticias - {{ date('Y') }}
                    <a href="#" class="go-top">
                        <i class="fa fa-caret-up" aria-hidden="true"></i>
                    </a>
                </p>
            </div>

        </div>
    </footer>

    <!-- Back to Top -->
    <a href="{{ route('home.pages.contatos.index') }}" data-toggle="modal" data-target="#modalExemplo"
        class="back-to-top">
        {{-- divulgar --}}
        <img src="{{ asset('home/images/avatar.webp') }}" style="width: 70px" class="divulgar" alt="">
    </a>
    <!-- End footer -->
    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="z-index: 9999999">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastre-se e anuncie aqui!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('home.pages.register.store') }}" method="post">
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
                                <label for="">Nome completo</label>
                                <input type="text" name="name" class="form-control">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                <label for="">E-mail</label>
                                <input type="text" name="email" class="form-control">
                                <x-input-error :messages="$errors->get('enail')" class="mt-2" />

                                <label for="">Senha</label>
                                <input type="password" name="password" class="form-control">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                <label for="">Repetir senha</label>
                                <input type="password" name="password_confirmation" class="form-control">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Selecione um plano</label>
                                    <select class="form-control" name="plano">
                                        <option value="Gratuito">Gratuito</option>
                                        <option value="30 dias 39,90">30 dias 39,90</option>
                                        <option value="90 dias 59,90">90 dias 59,90</option>
                                        <option value="6 meses 69,90">6 meses 69,90</option>
                                        <option value="12 meses 99,90">12 meses 99,90</option>
                                    </select>
                                    <input type="hidden" name="role" value="2">
                                </div>
                            </div>

                        </div><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
