@extends('home.layout.app')
@section('title', 'Confirmar pix')
@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="posts-block articles-box">
                <div class="title-section text-center">
                    <p style="color: yellowgreen">
                        <strong>Número reservado com sucesso, para confirmar a parceria efetue o
                            pagamento.
                        </strong>
                    </p>
                    <h1>
                        Faça o pagamento via QR-code, ou use a chave pix!
                    </h1>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>QR-CODE</h2>
                        <img src="{{ asset('home/images/qrcode.jpeg') }}" width="150" alt="">
                    </div>
                </div>
                <div class="news-post article-post text-center" style="padding: 26px; color: #FFF">
                    <h2>Chave pix</h2>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <input type="text" style="text-align: center" value="99 981310800" class="form-control">
                        </div>
                        <div class="col-md-4"></div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
