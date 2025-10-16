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
                                <div class="col-md-12">
                                    <div class="alert alert-success text-center" style="color: white; margin: 10px;">
                                        {{ session('msg') }}
                                        <span>Para finalizar a compra realize o pagamento</span> <br><br>
                                        <img src="{{ asset('home/images/qrcode.png') }}" width="100" alt=""> <br><br>
                                       
                                        <!-- O input com o valor a ser copiado -->
    <input type="text" class="form-control" id="meuInput" value="00020126580014BR.GOV.BCB.PIX0136a6680036-2928-41db-a91b-631a96a1ac3e520400005303986540520.005802BR5924EDILSON MIGUEL BRUSTOLON6008ESTREITO62070503***6304302F"><br>

<!-- O botão que aciona a função de cópia -->
<button class="btn" onclick="copiarTexto()">Copiar</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <form action="{{ route('home.pages.rifas.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            Para finalizar preencha os campos abaixo. <br>
                            <form action="{{ route('home.pages.rifas.store') }}" id="contact-form" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name">Nome completo*</label>
                                        <input class="form-control" name="name" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="text">CPF*</label>
                                        <input class="form-control" name="cpf" type="text" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="E-mail">Telefone</label>
                                        <input class="form-control" name="tel" type="text" required>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">
                                     Comprar
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
