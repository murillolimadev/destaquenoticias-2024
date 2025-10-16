<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Noticia;
use App\Models\Parceiro;
use App\Models\Publicidade;
use App\Models\Rifa;
use App\Models\view;
use Illuminate\Http\Request;

class ParceiroController extends Controller
{
    private $parceiro;
    private $rifa;
    public function __construct(Parceiro $parceiro, Rifa $rifa)
    {
        $this->parceiro = $parceiro;
        $this->rifa = $rifa;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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
        $parceiro = Parceiro::all();
        $rifanum = Rifa::all();


        return view('home.pages.rifas.index', compact('rifanum', 'parceiro', 'cidades', 'noticias3', 'classificados', 'noticias6', 'brasil', 'esporte', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'wt' => 'required',
        ]);
        $this->parceiro->name = $request->get('name');
        $this->parceiro->wt = $request->get('wt');
        $this->parceiro->email = $request->get('email');
        $this->parceiro->number = $request->get('number');
        $this->parceiro->save();

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
        return view('home.pages.parceiros.pix', compact('cidades', 'noticias3', 'classificados', 'noticias6', 'brasil', 'esporte', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));

        // return redirect()->back()->with('msg', 'Número reservado com sucesso! Efetue o pagamento com a chave pix: 00020126360014br.gov.bcb.pix0114+559998131080052040000530398654047.005802BR5924EDILSON MIGUEL BRUSTOLON6010IMPERATRIZ62580520SAN2025033111354237550300017br.gov.bcb.brcode01051.0.06304BD4C');
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
        return view('home.pages.parceiros.show', compact('id', 'cidades', 'noticias3', 'classificados', 'noticias6', 'brasil', 'esporte', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
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
