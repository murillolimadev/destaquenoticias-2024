@extends('home.layout.app')
@section('title', 'Parceiro')

@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="posts-block articles-box">
                <div class="title-section">
                    <h1>
                        Seja parceiro da destaque notícias!
                    </h1>
                </div>
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
                                    <div class="alert alert-success text-center" style="color: white; margin: 10px;">
                                        {{ session('msg') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <form action="{{ route('home.pages.parceiro.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            Número {{ $id }} escolhido, para finalizar preencha os campos abaixo. <br>
                            <form action="{{ route('home.pages.parceiro.store') }}" id="contact-form" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name">Nome completo*</label>
                                        <input class="form-control" name="name" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="text">Whatsapp*</label>
                                        <input class="form-control" name="wt" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="E-mail">E-mail</label>
                                        <input class="form-control" name="email" type="email" required>
                                        <input class="form-control" name="number" type="hidden" value="{{ $id }}">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane"></i> Comprar
                                </button>
                                <div id="msg" class="alert"></div>
                            </form>
                        </div>
                    </div>
                    <div class="news-post article-post" style="padding: 26px; color: #FFF">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
