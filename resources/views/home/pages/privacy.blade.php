@extends('home.layout.app')
@section('title', 'Segurança e privacidade')

@section('content')
    <!-- content-section
                                                                                                                                                                                                       ================================================== -->
    <section id="content-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <!-- Posts-block -->
                    <div class="posts-block featured-box">
                        <div class="title-section">
                            {{-- <h1>Veja também</h1> --}}
                        </div>

                        <div class="owl-wrapper">
                            <div class="owl-carousel" data-num="3">
                                <div class="item">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <img src="{{ asset('upload/privacy.png') }}" style="height: 200px;"
                                                alt="">

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <p>
                        A sua privacidade é importante para nós. Esta política de privacidade descreve
                        como coletamos, usamos e protegemos as informações que você fornece ao usar
                        nosso aplicativo.
                    </p>

                    <b>*1. Coleta de Informações*</b>

                    <p>
                        Nosso aplicativo web view não coleta informações pessoais identificáveis. No
                        entanto, ao acessar o site, podemos coletar informações anônimas, como:
                    </p>

                    <p>•⁠ ⁠Dados de navegação (endereço IP, tipo de navegador, etc.) <br>
                    •⁠ ⁠Informações de uso (tempo de visita, páginas acessadas)</p> <br>

                    <b>*2. Uso das Informações*</b>

                    <p> As informações coletadas são utilizadas para:</p>

                    <p>
                        •⁠ ⁠Melhorar a experiência do usuário <br>
                        •⁠ ⁠Analisar o tráfego do site
                        •⁠ ⁠Oferecer conteúdo relevante
                    </p>

                    <b>*3. Cookies*</b>

                    <p>Nosso site pode usar cookies para melhorar a experiência do usuário. Os cookies
                        são pequenos arquivos armazenados no seu dispositivo. Você pode optar por
                        desativar os cookies nas configurações do seu navegador.</p>

                    <b>*4. Compartilhamento de Informações*</b>

                    <p>Não vendemos, trocamos ou transferimos suas informações pessoais a terceiros.
                        Podemos compartilhar informações anônimas com parceiros confiáveis para fins de
                        análise.</p>

                    <b>*5. Segurança*</b>

                    <p>Implementamos medidas de segurança para proteger suas informações. No entanto,
                        lembre-se de que nenhuma transmissão de dados pela internet é 100% segura.</p>

                    <b>*6. Alterações nesta Política*</b>

                    <p>Podemos atualizar esta política de privacidade ocasionalmente. Qualquer
                        alteração será publicada nesta página com a data da última atualização.</p>
                    <!-- End Posts-block -->

                    <!-- Advertisement -->
                    <div class="advertisement">
                        <a href="#"><img src="{{ asset('upload/addsense/620x80grey.jpg') }}" alt=""></a>
                    </div>
                    <!-- End Advertisement -->

                    <!-- Posts-block -->

                    <!-- End Posts-block -->

                </div>

                @include('home.layout.sidebar')
            </div>

           

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
    <!-- End content section -->


@endsection
