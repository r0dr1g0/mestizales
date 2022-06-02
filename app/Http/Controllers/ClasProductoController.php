<?php

namespace App\Http\Controllers;

use App\Models\clasProducto;
use Illuminate\Http\Request;

class ClasProductoController extends Controller
{
    public function index()
    {
        $vclasproducto = clasProducto::where('estado',1)->paginate();
        return view('admin.clasProducto.index', compact('vclasproducto'));
        // return view('admin.clasProducto.index');
    }

    public function create()
    {
        return view('admin.clasProducto.create');
    }

    public function store(Request $request)
    {
        $vclasproducto = new clasProducto($request->all());
        $vclasproducto->save();
        return redirect()->route('clasProducto.index');
    }

    public function show($id)
    {
        $vclasproducto = clasProducto::find($id);
        return view('admin.clasProducto.show', compact('vclasproducto'));
    }

    public function edit($id)
    {
        $vclasproducto = clasProducto::find($id);
        return view('admin.clasProducto.edit', compact('vclasproducto'));
    }

    public function update(Request $request, $id)
    {
        $vclasproducto = clasProducto::find($id);
        $vclasproducto->fill($request->all());
        $vclasproducto->save();
        return redirect()->route('clasProducto.index');
    }

    public function destroy($id)
    {
        // $vclasproducto = clasProducto::find($id);
        // $vclasproducto->update(['estado'=>'0']);
        // return redirect()->route('clasProducto.index');

        $vclasproducto = clasProducto::find($id);
        $vclasproducto->estado = 0;
        $vclasproducto->save();
        return redirect()->route('clasProducto.index');
    }
}
