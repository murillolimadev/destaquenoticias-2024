<!DOCTYPE html>
<html lang="en">

<head>
    <!--<< Required meta tags >>-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.png') }}" />

    {{-- favicon --}}
    <link rel="icon" href="{{ asset('home/images/icon.png') }}" sizes="any">
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.png') }}" rel="icon">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/css/modernmag-assets.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="icon" type="image/png" href="{{ asset('home/images/icon.png') }}" />
    <style>
        .theiaStickySidebar:after {
            content: "";
            display: table;
            clear: both;
        }

        .facebook-share-button {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 5px;
            background-size: 100% 100%;
            /* ou 'contain' */
            background-image: url("[URL-DO-ICONE]");
            background-repeat: no-repeat;
            background-position: center;
        }

        .pagination-list li {
            padding-top: 5px;
        }
    </style>
    {{-- face --}}
    <style>
        .facebook-share-button {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin: 5px;
            background-size: 100% 100%;
            /* ou 'contain' */
            background-image: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgaGVpZ2h0PSI2MHB4IiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCA2MCA2MCIgd2lkdGg9IjYwcHgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGUvPjxkZXNjLz48ZGVmcy8+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBpZD0ic29pY2FsIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSI+PGcgaWQ9InNvY2lhbCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTI3My4wMDAwMDAsIC0xMzguMDAwMDAwKSI+PGcgaWQ9InNsaWNlcyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTczLjAwMDAwMCwgMTM4LjAwMDAwMCkiLz48ZyBmaWxsPSIjMzQ2REE2IiBpZD0ic3F1YXJlLWZsYXQiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE3My4wMDAwMDAsIDEzOC4wMDAwMDApIj48cGF0aCBkPSJNMTAyLjk5NTkzNywwIEwxNTcuMDA0MDYzLDAgQzE1OC42NTg2NzMsMCAxNjAsMS4zMzczMDk3NCAxNjAsMi45OTU5Mzc0MyBMMTYwLDU3LjAwNDA2MjYgQzE2MCw1OC42NTg2NzMxIDE1OC42NjI2OSw2MCAxNTcuMDA0MDYzLDYwIEwxMDIuOTk1OTM3LDYwIEMxMDEuMzQxMzI3LDYwIDEwMCw1OC42NjI2OTAzIDEwMCw1Ny4wMDQwNjI2IEwxMDAsMi45OTU5Mzc0MyBDMTAwLDEuMzQxMzI2ODggMTAxLjMzNzMxLDAgMTAyLjk5NTkzNywwIFoiIGlkPSJzcXVhcmUtMiIvPjwvZz48ZyBmaWxsPSIjRkZGRkZGIiBpZD0iaWNvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTgyLjAwMDAwMCwgMTUwLjAwMDAwMCkiPjxwYXRoIGQ9Ik0xMTYuNDYyMjI0LDM1LjMxNDMxMyBMMTE2LjQ2MjIyNCwxNy45OTg5NjEzIEwxMTIuOTQzMjg5LDE3Ljk5ODk2MTIgTDExMi45NDMyODksMTIuMjU5MzU2MyBMMTE2LjQ2MjIyNCwxMi4yNTkzNTYzIEwxMTYuNDYyMjI0LDguNzg4Mzg2NDEgQzExNi40NjIyMjQsNC4xMDY2NDIyMiAxMTcuODYxOTk1LDAuNzMwNjE4OTg2IDEyMi45ODgxMDIsMC43MzA2MTg5ODYgTDEyOS4wODYzNiwwLjczMDYxODk4NiBMMTI5LjA4NjM2LDYuNDU4NDM5OTYgTDEyNC43OTIyNTUsNi40NTg0Mzk5NiBDMTIyLjY0MTg5NCw2LjQ1ODQzOTk2IDEyMi4xNTE4NzQsNy44ODczNzYzIDEyMi4xNTE4NzQsOS4zODM3NjA5NSBMMTIyLjE1MTg3NCwxMi4yNTkzNTUzIEwxMjguNzY5NDIzLDEyLjI1OTM1NTggTDEyNy44NjYxNzMsMTcuOTk4OTYxMyBMMTIyLjE1MTg3NCwxNy45OTg5NjEzIEwxMjIuMTUxODc0LDM1LjMxNDMxMjMgTDExNi40NjIyMjQsMzUuMzE0MzEzIFoiIGlkPSJmYWNlYm9vayIvPjwvZz48L2c+PC9nPjwvc3ZnPg==");
            /*Base 64 Icon by Xinh Studio*/
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <style>
        .imagem {
            width: 620px;
            height: 80px;

            -webkit-animation: 40s linear infinite LoadingBarProgress, .5s ease-out LoadingBarEnter;
            animation: 40s linear infinite LoadingBarProgress, .5s ease-out LoadingBarEnter;
            -webkit-transform-origin: left;
            transform-origin: left;
        }

        .cor-de-fundo {
            width: 500px;
            height: 500px;
            background: #a8a8a8 linear-gradient(to right, #a8a8a8, #3d3d3d, #ffafa9, #3d3d3d, #a8a8a8);
            background-size: 500%;
            -webkit-animation: 40s linear infinite LoadingBarProgress, .5s ease-out LoadingBarEnter;
            animation: 40s linear infinite LoadingBarProgress, .5s ease-out LoadingBarEnter;
            -webkit-transform-origin: left;
            transform-origin: left;
        }

        @-webkit-keyframes LoadingBarProgress {
            0% {
                background-position: 0% 0
            }

            to {
                background-position: 125% 0
            }
        }

        @keyframes LoadingBarProgress {
            0% {
                background-position: 0% 0
            }

            to {
                background-position: 125% 0
            }
        }

        @-webkit-keyframes LoadingBarEnter {
            0% {
                -webkit-transform: scaleX(0);
                transform: scaleX(0)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }

        @keyframes LoadingBarEnter {
            0% {
                -webkit-transform: scaleX(0);
                transform: scaleX(0)
            }

            to {
                -webkit-transform: scaleX(1);
                transform: scaleX(1)
            }
        }
    </style>

    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400,500,700&amp;lang=pt">
    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93&amp;lang=pt">
    <link rel="stylesheet" href="{{ asset('home/fontawesome/css/font-awesome.min.css') }}">
    <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/57/8b/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/57/8b/util.js"></script>
    <title>Destaque notícias - @yield('title')</title>

    <script>
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //altera a URL do botão
            document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" +
                encodeURIComponent(window.location.href);
        }, false);
    </script>

    {{-- whatsapp --}}
    <script>
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //conteúdo que será compartilhado: Título da página + URL
            var conteudo = encodeURIComponent(document.title + " " + window.location.href);
            //altera a URL do botão
            document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
        }, false);
    </script>

    {{-- SLIDER --}}
</head>

<body>
    <!-- Container -->
    <div id="container">
        @include('home.layout.nav')
        @yield('content')
        @include('home.layout.footer')
    </div>

    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="{{ asset('home/js/modernmag-plugins.min.js') }}"></script>
    <script src="{{ asset('home/js/popper.js') }}"></script>
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    <script
        src="http://maps.google.com/maps/api/js?key=AIzaSyCiqrIen8rWQrvJsu-7f4rOta0fmI5r2SI&amp;sensor=false&amp;language=en">
    </script>
    <script src="{{ asset('home/js/gmap3.min.js') }}"></script>
    <script src="{{ asset('home/js/script.js') }}"></script>
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //conteúdo que será compartilhado: Título da página + URL
            var conteudo = encodeURIComponent(document.title + " " + window.location.href);
            //altera a URL do botão
            document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
        }, false);
    </script>

    <!-- Você pode colocar este script num arquivo externo -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //altera a URL do botão
            document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" +
                encodeURIComponent(window.location.href);
        }, false);
    </script>

<!-- coiar input value -->
 <script>
    function copiarTexto() {
    // 1. Seleciona o elemento input pelo seu ID
    const inputParaCopiar = document.getElementById("meuInput");

    // 2. Obtém o valor do input usando a propriedade .value
    const textoCopiado = inputParaCopiar.value;

    // 3. Usa a API do navegador para copiar o texto para a área de transferência
    navigator.clipboard.writeText(textoCopiado)
        .then(() => {
            alert("QR-Code copiado: " + textoCopiado);
        })
        .catch(err => {
            console.error("Erro ao copiar o texto: ", err);
        });
}
 </script>
    <!-- {{-- SLIDER --}} -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
