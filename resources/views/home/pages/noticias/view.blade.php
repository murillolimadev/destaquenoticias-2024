@extends('home.layout.app')
@section('title', $data->title)
{{-- matas tags wt --}}
<meta property="og:site_name" content="Destaque notícias">
<meta property="og:title" content="{{ $data->title ?? '' }}">
<meta property="og:description" content="{{ $data->desc ?? '' }}">
<meta property="og:image" itemprop="image"
    content="https://www.destaquenoticias.com/upload/noticias/{{ $data->img ?? '' }}">
<meta property="og:type" content="website">
@section('content')
    <section id="content-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="single-post">
                        <h1 style="font-size: 26px;">{{ $data->title }}</h1>
                        <p>{{ $data->desc }}</p>
                        <ul class="post-tags">
                            <li>
                                {{-- <i class="lnr lnr-user"></i> --}}
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <a href="#">
                                    {{ date('d/m/Y', strtotime($data->created_at)) }}
                                </a>
                            </li>
                            {{-- <li><a href="single-post.html#"><i class="lnr lnr-book"></i><span>20 comments</span></a></li> --}}
                            <li>
                                <i class="lnr lnr-eye"></i>
                                {{-- visualizacoes --}}
                                {{ count($data->views) }} visualizações
                            </li>
                        </ul>

                        <div class="col-md-12">
                            <img src="{{ asset('upload/noticias/' . $data->img) }}" alt="" style="height: 400px;">
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">
                                {{-- <span style="font-size: 10px">Compartilhar</span><br> --}}
                                <a
                                    href="https://api.whatsapp.com/send?text=www.destaquenoticias.com/view/{{ $data->slug }}">
                                    <img src="{{ asset('home/images/whatsapp-icon.png') }}" style="width: 40px"
                                        alt="">
                                </a>
                                <a
                                    href="https://www.facebook.com/sharer/sharer.php?u=www.destaquenoticias.com/view/{{ $data->slug }}">
                                    <img src="{{ asset('home/images/face.png') }}" style="width: 40px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="text-boxes" style="text-align: justify">
                            {!! $data->content !!}
                        </div>
                    </div>
                    <!-- End single-post -->

                    <!-- Advertisement -->
                    <div class="advertisement">
                        <a href="single-post.html#">
                            <img src="{{ asset('home/upload/addsense/620x80grey.jpg') }}" alt="">
                        </a>
                    </div>
                    <!-- End Advertisement -->

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
