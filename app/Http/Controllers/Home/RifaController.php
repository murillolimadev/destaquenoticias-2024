<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Noticia;
use App\Models\Parceiro;
use App\Models\Publicidade;
use App\Models\view;
use Illuminate\Http\Request;

class RifaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        $maranhao = Noticia::where('cat_id', '=', 2)->orderBy('id', 'DESC')->take(4)->latest()->get();
        $rifa = Noticia::all();
        $parceiros = Parceiro::latest()->get();

        return view('home.pages.rifas.index', compact('rifa', 'parceiros', 'cidades', 'noticias3', 'classificados', 'noticias6', 'brasil', 'esporte', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
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
        $request->validate([
            'name' => 'required',
            'cpf' => 'required',
            'tel' => 'required',
        ]);

        Parceiro::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'tel' => $request->tel,
            'number' => $request->id
        ]);
        return redirect()->back()->with('msg', 'Número reservado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        $maranhao = Noticia::where('cat_id', '=', 2)->orderBy('id', 'DESC')->take(4)->latest()->get();
        return view('home.pages.rifas.show', compact('id', 'cidades', 'noticias3', 'classificados', 'noticias6', 'brasil', 'esporte', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
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
