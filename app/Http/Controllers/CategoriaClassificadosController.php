<?php

namespace App\Http\Controllers;

use App\Models\CategoriaClassificados;
use Illuminate\Http\Request;

class CategoriaClassificadosController extends Controller
{
    private $categoria;
    public function __construct(CategoriaClassificadosController $categoria)
    {
        $this->categoria = $categoria;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = CategoriaClassificados::latest()->get();
        return view('admin.pages.cliente.classificados.categorias.index', compact('cat'));
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
            'title' => 'required',
        ]);
        $noticia = $this->categoria->find($request->id);
        $this->categoria->title = $request->get('title');
        $this->categoria->slug = Str::slug($request->name, '-');
        $this->categoria->save();
        return redirect()->back()->with('msg', 'Cadastrado com sucesso!');
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
    public function destroy($id)
    {
        CategoriaClassificadosController::destroy($id);
        return redirect()->back()->with('msg', 'Deletada com sucesso!');
    }
}
