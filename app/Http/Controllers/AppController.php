<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Noticia;
use App\Models\Publicidade;
use App\Models\view;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidades = Categoria::latest()->get();
        $classificados = Classificado::latest()->get();
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->limit(4)->get();
        $esporte =  Noticia::where('cat_id', '=', 5)->latest()->limit(4)->get();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $categorias = Categoria::all();
        $vejatambem =  Noticia::inRandomOrder()->limit(10)->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $maranhao =  Noticia::where('cat_id', '=', 2)->limit(4)->get();
        $publicidade = Publicidade::all();

        return view('home.pages.app.index', compact('cidades', 'classificados', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'brasil', 'maranhao', 'esporte', 'publicidade'));
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
    public function show(App $app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(App $app)
    {
        //
    }
}
