<?php

namespace App\Http\Controllers;

use App\Models\categoriaInsumo;
use Illuminate\Http\Request;

class CategoriaInsumoController extends Controller
{
    public function index()
    {
        $vcategoriainsumo = categoriaInsumo::where('estado',1)->paginate();
        return view('admin.categoriainsumo.index', compact('vcategoriainsumo'));
        // return view('admin.categoriainsumo.index');
    }

    public function create()
    {
        return view('admin.categoriainsumo.create');
    }

    public function store(Request $request)
    {
        $vcategoriainsumo = new categoriaInsumo($request->all());
        $vcategoriainsumo->save();
        return redirect()->route('categoriainsumo.index');
    }

    public function show($id)
    {
        $vcategoriainsumo = categoriaInsumo::find($id);
        return view('admin.categoriainsumo.show', compact('vcategoriainsumo'));
    }

    public function edit($id)
    {
        $vcategoriainsumo = categoriaInsumo::find($id);
        return view('admin.categoriainsumo.edit', compact('vcategoriainsumo'));
    }

    public function update(Request $request, $id)
    {
        $vcategoriainsumo = categoriaInsumo::find($id);
        $vcategoriainsumo->fill($request->all());
        $vcategoriainsumo->save();
        return redirect()->route('categoriainsumo.index');
    }

    public function destroy($id)
    {
        // $vcategoriainsumo = categoriainsumo::find($id);
        // $vcategoriainsumo->update(['estado'=>'0']);
        // return redirect()->route('categoriainsumo.index');

        $vcategoriainsumo = categoriaInsumo::find($id);
        $vcategoriainsumo->estado = 0;
        $vcategoriainsumo->save();
        return redirect()->route('categoriainsumo.index');
    }
}
