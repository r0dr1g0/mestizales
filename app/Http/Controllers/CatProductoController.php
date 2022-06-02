<?php

namespace App\Http\Controllers;

use App\Models\catProducto;
use Illuminate\Http\Request;

class CatProductoController extends Controller
{

    public function index()
    {
        $vcatproducto = catProducto::where('estado',1)->paginate();
        return view('admin.catProducto.index', compact('vcatproducto'));
    }

    public function create()
    {
        return view('admin.catProducto.create');
    }

    public function store(Request $request)
    {
        $vcatproducto = new catProducto($request->all());
        $vcatproducto->save();
        return redirect()->route('catProducto.index');
    }

    public function show($id)
    {
        $vcatproducto = catProducto::find($id);
        return view('admin.catProducto.show', compact('vcatproducto'));
    }

    public function edit($id)
    {
        $vcatproducto = catProducto::find($id);
        return view('admin.catProducto.edit', compact('vcatproducto'));
    }

    public function update(Request $request, $id)
    {
        $vcatproducto = catProducto::find($id);
        $vcatproducto->fill($request->all());
        $vcatproducto->save();
        return redirect()->route('catProducto.index');
    }

    public function destroy($id)
    {
        $vcatproducto = catProducto::find($id);
        $vcatproducto->estado = 0;
        $vcatproducto->save();
        return redirect()->route('catProducto.index');
    }
}
