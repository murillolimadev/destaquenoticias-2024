<?php

namespace App\Http\Controllers;

use App\Models\Rifa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;


class RifaController extends Controller
{
    private $rifa;
    public function __construct(Rifa $rifa)
    {
        $this->rifa = $rifa;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rifa::latest()->get();
        return view('admin.pages.rifa.index', compact('data'));
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
         if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time() . '.' . $request->image->extension();
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $destinationPathThumbnail = public_path('upload/rifas');
            $img = Image::read($image->path());
            $img->resize(400, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPathThumbnail . '/' . $imageName);

            $destinationPath = public_path('/rifas');
            $image->move($destinationPath, $imageName);

            $this->rifa->image = $imageName;
            $this->rifa->title = $request->title;
            $this->rifa->num = $request->num;
            $this->rifa->slug = Str::slug($request->title, '-');
            $this->rifa->save();

            return redirect()->back()->with('msg', 'Adicionado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rifa $rifa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rifa $rifa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rifa $rifa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rifa $rifa)
    {
        //
    }
}
