@extends('home.layout.app')
@section('title', 'Denuncie')

@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="row" style="transform: none;">
                <div class="col-lg-8">

                    <!-- contact info box -->
                    <div class="contact-info-box">
                        <div class="title-section">
                            <h1><span>Denuncie</span></h1>
                        </div>
                        <p>
                            A partir de agora você entrou num ambiente seguro, com certificação digital, para que
                            possa fazer suas denúncias com total tranquilidade.
                        </p>

                    </div>
                    <!-- End contact info box -->

                    <!-- contact form box -->
                    <div class="contact-form-box">
                        <div class="title-section">
                            {{-- <h1><span>Talk to us</span></h1> --}}
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @if (session('msg'))
                                    <div class="alert alert-success text-center">
                                        {{ session('msg') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <form action="{{ route('home.pages.denuncia.store') }}" method="POST" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">Nome*</label>
                                    <input id="name" name="name" type="text">
                                </div>
                            </div>
                            <label for="comment">Denuncia*</label>
                            <textarea id="comment" name="content"></textarea>
                            <button type="submit">
                                <i class="fa fa-paper-plane"></i> Enviar
                            </button>
                            <div id="msg" class="alert"></div>
                        </form>
                    </div>
                    <!-- End contact form box -->

                </div>

                @include('home.layout.sidebar')
            </div>

            <!-- Advertisement -->
            <div class="advertisement">
                <a href="#">
                    <img src="{{ asset('home/upload/addsense/620x80grey.jpg') }}" alt="" width="620"
                        height="80"></a>
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
