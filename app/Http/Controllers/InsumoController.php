<?php

namespace App\Http\Controllers;

use App\Models\insumo;
use App\Models\categoriaInsumo;
use App\Models\proveedor;
use App\Models\tipoMedida;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function index()
    {
        $vinsumo = insumo::where('estado',1)->paginate();
        // return view('admin.insumo.index', compact('vinsumo'));
        return view('admin/insumo/index')->with('vinsumo', $vinsumo);
    }


    public function create()
    {
        $vinsumo = insumo::where('estado',1)->get();
        $vcategoriainsumo = categoriaInsumo::where('estado',1)->get();
        $vproveedor = proveedor::where('estado',1)->get();
        $vtipomedida = tipoMedida::where('estado',1)->get();
        return view('admin.insumo.create', compact('vinsumo','vcategoriainsumo','vproveedor','vtipomedida'));
    }

    public function store(Request $request)
    {
        $vinsumo = new insumo($request->all());
        $vinsumo->save();
        return redirect()->route('insumo.index');
    }

    public function show($id)
    {
        $vinsumo = insumo::find($id);
        return view('admin.insumo.show', compact('vinsumo'));
    }

    public function edit($id)
    {
        $vinsumo = insumo::find($id);
        $vcategoriainsumo = categoriaInsumo::where('estado',1)->where('id','!=', $vinsumo->catinsumo_id)->get();
        $vproveedor = proveedor::where('estado',1)->where('id','!=', $vinsumo->proveedor_id)->get();
        $vtipomedida = tipoMedida::where('estado',1)->where('id','!=', $vinsumo->tipoMedida_id)->get();;
        return view('admin.insumo.edit', compact('vinsumo','vcategoriainsumo','vproveedor','vtipomedida'));
    }

    public function update(Request $request, $id)
    {
        $vinsumo = insumo::find($id);
        $vinsumo->fill($request->all());
        $vinsumo->save();
        return redirect()->route('insumo.index');
    }

    public function destroy($id)
    {
        $vinsumo = insumo::find($id);
        $vinsumo->estado = 0;
        $vinsumo->save();
        return redirect()->route('insumo.index');
    }
}
