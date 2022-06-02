<?php

namespace App\Http\Controllers;
use App\Models\persona;
use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $vcliente = cliente::where('estado',1)->paginate();
        return view('admin.cliente.index', compact('vcliente'));
    }

    public function create()
    {
        $vcliente = cliente::where('estado',1)->get();
        $vpersona = persona::where('estado',1)->get();
        return view('admin.cliente.create', compact('vpersona','vcliente'));
    }

    public function store(Request $request)
    {
        $vcliente = new cliente($request->all());
        $vcliente->save();
        return redirect('admin/cliente');
    }

    public function show($id)
    {
        $vcliente = cliente::find($id);
        return view('admin.cliente.show', compact('vcliente'));
        // return view('admin.parciales.modalvercliente', compact('vcliente'));

    }

    public function edit($id)
    {
        $vcliente = cliente::find($id);
        $vpersona = persona::where('estado',1)->where('id', '!=', $vcliente->persona_id)->get();
        return view('admin.cliente.edit', compact('vcliente', 'vpersona'));
    }

    public function update(Request $request, $id)
    {
        $vcliente = cliente::find($id);
        $vcliente->fill($request->all());
        $vcliente->save();
        return redirect()->route('cliente.index');
    }

    public function destroy( $id)
    {
        $vcliente = cliente::find($id);
        $vcliente->estado = 0;
        $vcliente->save();
        return redirect()->route('cliente.index');
    }

}
