<?php

namespace App\Http\Controllers\Home;

use AdinanCenci\Climatempo\Weather\Weather;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Noticia;
use App\Models\Parceiro;
use App\Models\Publicidade;
use App\Models\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $view;
    public function __construct(view $view)
    {
        $this->view = $view;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $noticias3 = Noticia::orderby('id', 'DESC')->take(3)->get();
        $noticias6 = Noticia::orderby('id', 'DESC')->skip(3)->take(6)->get();
        // dd($noticias3);
        $brasil = Noticia::where('cat_id', '=', 6)->orderBy('id', 'DESC')->limit(4)->get();
        $esporte = Noticia::where('cat_id', '=', 5)->orderBy('id', 'DESC')->limit(4)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem = Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $publicidade = Publicidade::latest()->get();
        $maranhao = Noticia::where('cat_id', '=', 2)->latest()->take(4)->get();
      

        return view('home.pages.index', compact('noticias','cidades', 'noticias3', 'classificados', 'noticias6', 'brasil', 'esporte', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function noticias($slug)
    {
        $data = Noticia::where('slug', '=', $slug)->first();
        if ($data->id === NULL) {
            $this->view->noticia_id = $data->id;
            $this->view->total = +1;
            $this->view->save();
        } else {
            $this->view->noticia_id = $data->id;
            $this->view->total = +1;
            $this->view->save();
        }
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $noticias1 = Noticia::latest()->first();
        $noticias6 = Noticia::latest()->limit(6)->get();
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->orderBy('id', 'DESC')->limit(4)->get();
        $esporte = Noticia::where('cat_id', '=', 5)->latest()->orderBy('id', 'DESC')->limit(4)->get();
        $noticiaslider = Noticia::latest()->limit(3)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem = Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $publicidade = Publicidade::all();
        $maranhao = Noticia::where('cat_id', '=', 2)->orderBy('id', 'DESC')->take(4)->latest()->get();
        $total = view::where('noticia_id', '=', $data->id)->get();
        return view('home.pages.noticias.view', compact('data', 'total', 'cidades', 'classificados', 'noticias1', 'noticias6', 'brasil', 'esporte', 'noticiaslider', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function politica()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function view($slug)
    {
        $data = Noticia::where('slug', '=', $slug)->first();
        if ($data->id === NULL) {
            $this->view->noticia_id = $data->id;
            $this->view->total = +1;
            $this->view->save();
        } else {
            $this->view->noticia_id = $data->id;
            $this->view->total = +1;
            $this->view->save();
        }
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $noticias1 = Noticia::latest()->first();
        $noticias6 = Noticia::latest()->limit(6)->get();
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->orderBy('id', 'DESC')->limit(4)->get();
        $esporte = Noticia::where('cat_id', '=', 5)->latest()->orderBy('id', 'DESC')->limit(4)->get();
        $noticiaslider = Noticia::latest()->limit(3)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem = Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $publicidade = Publicidade::all();
        $maranhao = Noticia::where('cat_id', '=', 2)->orderBy('id', 'DESC')->take(4)->latest()->get();
        $total = view::where('noticia_id', '=', $data->id)->get();
        return view('home.pages.noticias.view', compact('data', 'total', 'cidades', 'classificados', 'noticias1', 'noticias6', 'brasil', 'esporte', 'noticiaslider', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function privacy()
    {
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $noticias1 = Noticia::latest()->first();
        $noticias6 = Noticia::latest()->limit(6)->get();
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->limit(4)->get();
        $esporte = Noticia::where('cat_id', '=', 5)->latest()->limit(4)->get();
        $noticiaslider = Noticia::latest()->limit(3)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem = Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $publicidade = Publicidade::all();
        $maranhao = Noticia::latest('cat_id', '=', 2)->limit(4)->get();
        //clima

        return view('home.pages.privacy.index', compact('cidades', 'classificados', 'noticias1', 'noticias6', 'brasil', 'esporte', 'noticiaslider', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }

    public function search(Request $request)
    {
        // $whenQuery->where('nome', 'like', '%' . $request->nome
        $data = Noticia::where('title', 'LIKE', '%' . $request->pesq . '%')->get();
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $noticias1 = Noticia::latest()->first();
        $noticias6 = Noticia::latest()->limit(6)->get();
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->limit(4)->get();
        $esporte = Noticia::where('cat_id', '=', 5)->latest()->limit(4)->get();
        $noticiaslider = Noticia::latest()->limit(3)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem = Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $publicidade = Publicidade::all();
        $maranhao = Noticia::latest('cat_id', '=', 2)->limit(4)->get();
        $pesq = $request->pesq;
        return view('home.pages.noticias.search', compact('data', 'pesq', 'cidades', 'classificados', 'noticias1', 'noticias6', 'brasil', 'esporte', 'noticiaslider', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }

    public function rifas()
    {
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $noticias3 = Noticia::orderBy('id', 'DESC')->take(3)->get();
        $noticias6 = Noticia::orderBy('id', 'DESC')->skip(3)->take(6)->get();
        // dd($noticias3);
        $brasil = Noticia::where('cat_id', '=', 6)->orderBy('id', 'DESC')->limit(4)->get();
        $esporte = Noticia::where('cat_id', '=', 5)->orderBy('id', 'DESC')->limit(4)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem = Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $publicidade = Publicidade::all();
        $maranhao = Noticia::where('cat_id', '=', 2)->latest()->take(4)->get();
        $parceiro = Parceiro::all();
        return view('home.pages.rifas.index', compact('parceiro', 'cidades', 'noticias3', 'classificados', 'noticias6', 'brasil', 'esporte', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }
}
