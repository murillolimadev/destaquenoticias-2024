@extends('home.layout.app')
@section('title', 'Contatos')

@Section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-lg-8">
                    <div class="contact-form-box">
                        <div class="title-section">
                            <h1><span>Política de Privacidade</span></h1>
                        </div>
                        <p>
                            A sua privacidade é importante para nós. Esta política de privacidade descreve como coletamos,
                            usamos e protegemos as informações que você fornece ao usar nosso aplicativo.
                        </p>

                        <h2>1. Coleta de Informações</h2>
                        <p>Nosso aplicativo web view não coleta informações pessoais identificáveis. No entanto, ao acessar
                            o site, podemos coletar informações anônimas, como: <br>

                            •⁠ ⁠Dados de navegação (endereço IP, tipo de navegador, etc.) <br>
                            •⁠ ⁠Informações de uso (tempo de visita, páginas acessadas)
                        </p>

                        <h2>2. Uso das Informações</h2>
                        <p>
                            As informações coletadas são utilizadas para: <br>

                            •⁠ ⁠Melhorar a experiência do usuário <br>
                            •⁠ ⁠Analisar o tráfego do site <br>
                            •⁠ ⁠Oferecer conteúdo relevante
                        </p>

                        <h2>3. Cookies</h2>
                        <p>
                            Nosso site pode usar cookies para melhorar a experiência do usuário. Os cookies são pequenos
                            arquivos armazenados no seu dispositivo. Você pode optar por desativar os cookies nas
                            configurações do seu navegador.
                        </p>

                        <h2>4. Compartilhamento de Informações</h2>
                        <p>Não vendemos, trocamos ou transferimos suas informações pessoais a terceiros. Podemos
                            compartilhar informações anônimas com parceiros confiáveis para fins de análise.</p>

                        <h2>5. Segurança</h2>
                        <p>Implementamos medidas de segurança para proteger suas informações. No entanto, lembre-se de que
                            nenhuma transmissão de dados pela internet é 100% segura.</p>

                        <h2>6. Alterações nesta Política</h2>

                        <h2>3. Cookies</h2>
                        <p>
                            Nosso site pode usar cookies para melhorar a experiência do usuário. Os cookies são pequenos
                            arquivos armazenados no seu dispositivo. Você pode optar por desativar os cookies nas
                            configurações
                            do seu navegador.
                        </p>

                        <h2>4. Compartilhamento de Informações</h2>
                        <p>
                            Não vendemos, trocamos ou transferimos suas informações pessoais a terceiros. Podemos
                            compartilhar
                            informações anônimas com parceiros confiáveis para fins de análise.
                        </p>

                        <h2>5. Segurança</h2>
                        <p>
                            Implementamos medidas de segurança para proteger suas informações. No entanto, lembre-se de que
                            nenhuma transmissão de dados pela internet é 100% segura.
                        </p>

                        <h2>6. Alterações nesta Política</h2>
                        <p>
                            Podemos atualizar esta política de privacidade ocasionalmente. Qualquer alteração será publicada
                            nesta página com a data da última atualização.
                        </p>


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
