@extends('home.layout.app')
@section('title', 'Parceiros')

@section('content')
    <section id="content-section">
        <div class="container">
            <div class="posts-block articles-box">
                <div class="title-section text-center">
                    <h1>
                        Seja parceiro da destaque notícias e ganhe prêmios
                    </h1><br>
                    <!-- <img src="{{ asset('home/images/qrcode.png') }}" alt="" width="200"> -->
                    <h3><strong>Escolha um número e concorra a um iphone 15</strong></h3>

                </div>
                <form action="" method="post">
                    <div class="news-post article-post">
                        <ul class="pagination-list" style="background-color: #1866CF; padding: 20px; border-radius: 5px;">
                            <li class="rifa">
                                @php
                                    for ($i = 1; $i <= 1000; $i++) {
                                        echo '<a href="https://destaquenoticias.com/parceiros/rifas/'.$i.' "class="btn">' . $i . '</a>';
                                    }
                                @endphp
                            </li>
                        </ul>
                    </div>
                </form>

                {{-- <div class="news-post article-post" style="background-color: #1866CF; padding: 26px; color: #FFF">
                    <ul class="pagination-list">
                        <h3 style="color: #FFF;">Número já escolhidos</h3>
                        @foreach ($parceiro as $item)
                            <li class="">
                                {{ $item->name }} reservou o número
                                <a href="" class="btn btn-danger" style="color: #FFF;  border-radius: 50%;"
                                    title="Aguardando pagamento">
                                    {{ $item->number }}
                                </a>
                                - Aguardando pagamento.
                            </li> <br>
                        @endforeach
                    </ul>
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align: justify;">
                            <strong>A Lei nº 14.909, de 1º de julho de 2024</strong>, institui o Dia do Rei Pelé, a ser
                            celebrado anualmente
                            no dia 19 de novembro. A lei foi sancionada pelo presidente Luiz Inácio Lula da Silva.
                            A data escolhida para a homenagem é uma referência a 19 de novembro de 1969, quando Pelé marcou
                            o seu milésimo gol. O feito aconteceu no estádio do Maracanã, no Rio de Janeiro, durante a
                            partida entre o Santos e o Vasco da Gama.
                            O projeto de lei que criou o Dia do Rei Pelé foi o 5.867/2023, dos deputados Luciano Ducci
                            (PSB-PR) e Felipe Carreras (PSB-PE). O projeto foi aprovado pela Câmara dos Deputados e pelo
                            Senado Federal.
                            Pelé, cujo nome verdadeiro era Edson Arantes do Nascimento, foi considerado o maior jogador de
                            futebol de todos os tempos. Ele faleceu em decorrência de um câncer em 29 de dezembro de 2022,
                            em São Paulo, aos 82 anos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
