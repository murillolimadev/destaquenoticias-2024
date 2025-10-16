<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Classificado;
use App\Models\Denuncia;
use App\Models\Noticia;
use App\Models\Publicidade;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    private $denuncia;
    public function __construct(Denuncia $denuncia)
    {
        $this->denuncia = $denuncia;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalnews = Noticia::all();
        $data = Denuncia::latest()->get();
        return view('admin.pages.denuncia.index', compact(['data','totalnews']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function pagamento()
    {
        $cat = Categoria::orderBy('created_at', 'desc')->get();
        return view('home.pages.app.index', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);
        $this->denuncia->assunto = $request->name;
        $this->denuncia->denuncia = $request->content;
        $this->denuncia->save();
        return redirect()->back()->with('msg', 'Denuncia enviada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Denuncia $denuncia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Denuncia $denuncia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function create(Request $request)
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

        return view('home.pages.denuncie.create', compact('cidades', 'classificados', 'noticias1', 'noticias6', 'brasil', 'esporte', 'noticiaslider', 'random', 'categorias', 'vejatambem', 'noticiasrodape', 'destaque', 'publicidade', 'maranhao'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Denuncia $denuncia)
    {
        //
    }
}
