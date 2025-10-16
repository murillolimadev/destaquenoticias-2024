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
