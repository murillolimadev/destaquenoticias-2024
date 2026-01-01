@extends('home.layout.app')
@section('title', 'Home')

@section('content')
    <!-- Slider main container -->
    <div class="wide-news-heading" style="opacity: 1;">

        <div class="item main-news">

            <div class="flexslider">
                <ul class="slides">
                    @foreach ($noticias3 as $item)
                        <li class=""
                            style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;">
                            <div class="news-post large-image-post">
                                <img src="{{ asset('upload/noticias/' . $item->img) }}" alt="">
                                <div class="hover-box">
                                    <a href="{{ route('home.pages.noticias.index', [$item->slug]) }}" style="font-size: 11px !important;"
                                        class="category category">{{ $item->categoria->name }}</a>
                                    <h2><a
                                            href="{{ route('home.pages.noticias.index', [$item->slug]) }}" style="font-size: 18px">{{ $item->title }}</a>
                                    </h2>
                                    <ul class="post-tags">
                                        {{-- <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li> --}}
                                        <li>
                                            <a href="{{ route('home.pages.noticias.index', [$item->slug]) }}">
                                                <i class="lnr lnr-book"></i><span>{{ $item->desc }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{-- <ol class="flex-control-nav flex-control-paging">
                    <li><a class="">1</a></li>
                    <li><a class="">2</a></li>
                    <li><a class="flex-active">3</a></li>
                </ol>
                <ul class="flex-direction-nav">
                    <li><a class="flex-prev" href="#"></a></li>
                    <li><a class="flex-next" href="#"></a></li>
                </ul> --}}
            </div>

        </div>
        @foreach ($noticias6 as $item)
            <div class="item">
                <div class="news-post image-post">
                    <img src="{{ asset('upload/noticias/' . $item->img) }}" alt="">
                    <div class="hover-box">
                        <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}"
                            class="category category-world">{{ $item->categoria->name }}</a>
                        <h2><a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a></h2>
                       {{--  <ul class="post-tags">
                            <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li>
                            <li>
                                <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}"><i
                                        class="lnr lnr-book"></i><span>{{ date('d/m/Y', strtotime($item->created_at)) }}</span></a>
                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <!-- End slider -->

    <!-- content-section
                                                                                                                                                                                                                                                                                               ================================================== -->
    <section id="content-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">

                    <!-- Posts-block -->
                    <div class="posts-block standard-box">
                        <div class="title-section">
                            <h1>ÚLTIMAS NOTÍCIAS <i class="lnr lnr-bookmark"></i></h1>
                        </div>

                        <div class="row">
                            @foreach ($noticias6 as $item)
                                <div class="col-sm-6">
                                    <div class="news-post standart-post">
                                        <div class="post-image">
                                            <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                                <img src="{{ asset('/upload/noticias/' . $item->img) }}" alt=""
                                                    style="height: 200px">
                                            </a>
                                            <a href="#" class="category category-tech"
                                                style="background-color: #1866CF;">{{ $item->categoria->name }}</a>
                                        </div>
                                        <h2><a
                                                href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                        </h2>
                                        <ul class="post-tags">
                                            <li>
                                                <i class="lnr lnr-user"></i>
                                                <a href="#">Administrador</a>
                                            </li>
                                            </li>
                                            {{-- <li><i class="lnr lnr-eye"></i>872 Views</li> --}}
                                        </ul>
                                        <p>{{ $item->desc }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>


                    </div>
                    <!-- End Posts-block -->

                    <!-- Posts-block -->
                    <div class="posts-block featured-box">
                        <div class="title-section">
                            <h1>Veja também</h1>
                        </div>

                        <div class="owl-wrapper">
                            <div class="owl-carousel" data-num="3">
                                @foreach ($vejatambem as $item)
                                    <div class="item">
                                        <div class="news-post standart-post">
                                            <div class="post-image">
                                                <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                                    <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                        style="height: 200px;" alt="">
                                                </a>
                                                <a href="#"
                                                    class="category category-fashion">{{ $item->categoria->name }}</a>
                                            </div>
                                            <h2><a
                                                    href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                            </h2>
                                            <ul class="post-tags">
                                                <li><i class="lnr lnr-user"></i><a href="#">Administrador</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <!-- End Posts-block -->

                    <!-- Advertisement -->
                    <div class="advertisement">
                        <a href="#"><img src="{{ asset('upload/addsense/620x80grey.jpg') }}" alt=""></a>
                    </div>
                    <!-- End Advertisement -->

                    <!-- Posts-block -->
                    <div class="posts-block articles-box">
                        <div class="title-section">
                            <h1>Brasil</h1>
                        </div>
                        @foreach ($brasil as $item)
                            <div class="news-post article-post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-image">
                                            <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                                <img src="{{ asset('upload/noticias/' . $item->img) }}"
                                                    style="height: 130px;" alt="">
                                            </a>
                                            <a class="category category-travel"
                                                href="#">{{ $item->categoria->name }}</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h2 style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                            <a
                                                href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                        </h2>
                                        <ul class="post-tags">
                                            {{-- <li><i class="lnr lnr-user"></i><a href="#">Renata da silva</a></li> --}}

                                            <li><i class="lnr lnr-eye"></i>{{ count($item->views) }} Visualizações</li>
                                        </ul>
                                        <p>{{ $item->desc }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{-- <ul class="pagination-list">
                            <li><a href="index.html#">Prev</a></li>
                            <li><a href="index.html#" class="active">1</a></li>
                            <li><a href="index.html#">2</a></li>
                            <li><a href="index.html#">3</a></li>
                            <li><a href="index.html#">...</a></li>
                            <li><a href="index.html#">6</a></li>
                            <li><a href="index.html#">Next</a></li>
                        </ul> --}}

                    </div>
                    <!-- End Posts-block -->

                </div>

                @include('home.layout.sidebar')
            </div>

            <!-- Advertisement -->
            <div class="advertisement">
                <a href="#"><img src="{{ asset('home/upload/addsense/620x80grey.jpg') }}" alt=""></a>
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
    <!-- End content section -->


@endsection
