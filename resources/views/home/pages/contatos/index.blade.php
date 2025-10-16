@extends('home.layout.app')
@section('title', 'Contatos')

@Section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-lg-8">
                    <div class="contact-form-box">
                        <div class="title-section">
                            <h1><span>Fale conosco</span></h1>
                            <p>E-mail: contato@destaquenoticias.com</p>
                        </div>
                        <form id="contact-form" action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">
                                        Seu nome*</label>
                                    <input id="name" name="name" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label for="mail">Seu e-mail*</label>
                                    <input id="mail" name="mail" type="text">
                                </div>
                            </div>
                            <label for="comment">Sua mensagem*</label>
                            <textarea id="comment" name="comment"></textarea>
                            <button type="submit" id="submit_contact">
                                <i class="fa fa-paper-plane"></i> Enviar
                            </button>
                            <div id="msg" class="alert"></div>
                        </form>
                    </div>
                </div>

                @include('home.layout.sidebar')
            </div>

            <!-- End Advertisement -->

            <!-- more from news box -->
            <div class="more-from-news">
                <h1>APOIO</h1>
                <div class="row">
                    @foreach ($publicidade as $item)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="news-post thumb-post">
                                <div class="post-image">
                                    <a href="#">
                                        <img src="{{ asset('upload/publicidade/' . $item->img) }}" alt=""
                                            style="width: 100%; height: 100px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- end more from news box -->
        </div>
    </section>
@endsection
