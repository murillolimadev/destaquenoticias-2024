<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Noticia;
use App\Models\Publicidade;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $noticias1 = Noticia::latest()->first();
        $noticias6 = Noticia::latest()->limit(6)->get();
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->limit(4)->get();
        $esporte =  Noticia::where('cat_id', '=', 5)->latest()->limit(4)->get();
        $noticiaslider = Noticia::latest()->limit(3)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem =  Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $publicidade = Publicidade::all();
        $maranhao =  Noticia::where('cat_id', '=', 2)->limit(4)->get();
        return view('home.pages.cadastros.index', compact('cidades', 'classificados', 'noticias1', 'noticias6', 'brasil', 'esporte', 'noticiaslider', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
