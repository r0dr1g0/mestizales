<?php

namespace App\Http\Controllers;

use App\Models\tipoMedida;
use Illuminate\Http\Request;

class TipoMedidaController extends Controller
{
    public function index()
    {
        $vtipoMedida = tipoMedida::where('estado',1)->paginate();
        return view('admin.tipomedida.index', compact('vtipoMedida'));
        // return view('admin.tipoMedida.index');
    }

    public function create()
    {
        return view('admin.tipomedida.create');
    }

    public function store(Request $request)
    {
        $vtipoMedida = new tipoMedida($request->all());
        $vtipoMedida->save();
        return redirect()->route('tipomedida.index');
    }

    public function show($id)
    {
        $vtipoMedida = tipoMedida::find($id);
        return view('admin.tipomedida.show', compact('vtipoMedida'));
    }

    public function edit($id)
    {
        $vtipoMedida = tipoMedida::find($id);
        return view('admin.tipomedida.edit', compact('vtipoMedida'));
    }

    public function update(Request $request, $id)
    {
        $vtipoMedida = tipoMedida::find($id);
        $vtipoMedida->fill($request->all());
        $vtipoMedida->save();
        return redirect()->route('tipomedida.index');
    }

    public function destroy($id)
    {
        $vtipoMedida = tipoMedida::find($id);
        $vtipoMedida->estado = 0;
        $vtipoMedida->save();
        return redirect()->route('tipomedida.index');
    }
}
