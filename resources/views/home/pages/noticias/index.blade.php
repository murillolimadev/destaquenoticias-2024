@extends('home.layout.app')
@section('title', $slug->name)


@section('content')
    <section id="content-section" style="transform: none;">
        <div class="container" style="transform: none;">

            <div class="posts-block articles-box">
                <div class="title-section">
                    <h1>
                        {{ $slug->name }}
                    </h1>
                </div>

                <div class="news-post article-post">
                    @foreach ($data as $item)
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-sm-4">
                                <div class="post-image">
                                    <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                                        <img src="{{ asset('upload/noticias/' . $item->img) }}" style="height: 200px;"
                                            alt="">
                                    </a>
                                    <a class="category category-travel" href="#">{{ $slug->name }}</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <h2>
                                    <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                                </h2>
                                <ul class="post-tags">
                                    {{-- <li><i class="lnr lnr-user"></i>by <a href="index.html#">John Doe</a></li> --}}
                                    {{-- <li><a href="#"><i class="lnr lnr-book"></i><span>23 comments</span></a></li> --}}
                                    <li><i class="lnr lnr-eye"></i>{{ count($item->views) }} Visualizaçõe</li>
                                </ul>
                                <p>{{ $item->desc }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-3">
                    {{ $data->links() }}
                </div>
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
