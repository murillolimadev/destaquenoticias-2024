<div class="col-lg-4 sidebar-sticky"
    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

    <!-- Sidebar -->
    <div class="sidebar theiaStickySidebar">
        <div class="search-widget widget">
            <form action="{{ route('home.pages.search.index') }}" method="POST">
                @csrf
                <input type="search" placeholder="Buscar..." name="pesq" />
                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <div class="widget social-widget">
            <h1>Permaneça conectado</h1>
            <p>Quer ser informado sempre com nossas últimas novidades?</p>
            <ul class="social-share">
                <li>
                    <a href="#" class="rss">
                        <i class="fa fa-rss"></i>
                        <span>345</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/people/Destaque-noticias/100090408518901/?paipv=0&eav=AfZvcACXtmgqpggpj9DwDfdYMDREmTUKrwzLna6m9-hydLz1hRmy5UdNBM5d8fk3nxQ"
                        class="facebook">
                        <i class="fa fa-facebook"></i>
                        <span>3,460</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="twitter">
                        <i class="fa fa-twitter"></i>
                        <span>5,600</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="google">
                        <i class="fa fa-google-plus"></i>
                        <span>659</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="widget news-widget">
            <h1>HOJE EM DESTAQUE</h1>
            <ul class="small-posts">
                @foreach ($random as $item)
                    <li>
                        <a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">
                            <img src="{{ asset('upload/noticias/' . $item->img) }}" style="width: 100%; height: 70px;"
                                alt="">
                        </a>
                        <div class="post-cont">
                            <h2><a href="{{ route('home.pages.noticias.view', [$item->slug]) }}">{{ $item->title }}</a>
                            </h2>
                            {{-- <ul class="post-tags">
                                        <li><i class="lnr lnr-user"></i>by <a href="index.html#">Author</a></li>
                                    </ul> --}}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="advertisement">
            <a href="#">
                <img src="{{ asset('home/upload/addsense/300x250.jpg') }}" alt="">
            </a>
        </div>


        <div class="widget tags-widget">
            <h1>Tags</h1>
            <ul class="tags-list">
                @foreach ($categorias as $item)
                    <li>
                        <a href="{{ route('home.pages.cidade.index', $item->slug) }}">{{ $item->name }}</a>
                    </li>
                @endforeach

            </ul>
        </div>

    </div>

</div>
