<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Noticia;
use App\Models\Publicidade;
use App\Models\view;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brasil = Noticia::where('cat_id', '=', 6)->latest()->limit(4)->get();
        $esporte = Noticia::where('cat_id', '=', 5)->latest()->limit(4)->get();
        $maranhao = Noticia::where('cat_id', '=', 2)->latest()->limit(4)->get();
        $classificados = Classificado::latest()->get();
        $cidades = Categoria::latest()->get();
        $noticiasrodape = Noticia::inRandomOrder()->limit(3)->get();
        $destaque = Noticia::inRandomOrder()->first();
        $categorias = Categoria::all();
        $random = Noticia::inRandomOrder()->limit(10)->get();
        $publicidade = Publicidade::all();


        return view('home.pages.contatos.index', compact('brasil', 'esporte', 'maranhao', 'classificados', 'cidades', 'noticiasrodape', 'destaque', 'categorias', 'random', 'publicidade'));
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
