<?php

namespace App\Http\Controllers;

use App\Models\persona;
use App\Models\genero;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vpersona = persona::where('estado',1)->paginate(100000);
        return view('admin.persona.index', compact('vpersona'));
    }

    public function create()
    {
        $vpersona = persona::where('estado',1)->get();
        $vgenero = genero::where('estado',1)->get();
        return view('admin.persona.create', compact('vgenero','vpersona'));
    }

    public function store(Request $request)
    {
        $vpersona = new persona($request->all());
        $vpersona->save();
        return redirect('admin/persona');
    }

    public function show($id)
    {
        $vpersona = persona::find($id);
        return view('admin.persona.show', compact('vpersona'));
    }

    public function edit($id)
    {
        $vpersona = persona::find($id);
        $vgenero = genero::where('estado',1)->where('id', '!=', $vpersona->genero_id)->get();
        return view('admin.persona.edit', compact('vpersona', 'vgenero'));
    }

    public function update(Request $request, $id)
    {
        $vpersona = persona::find($id);
        $vpersona->fill($request->all());
        $vpersona->save();
        return redirect()->route('persona.index');
    }

    public function destroy( $id)
    {
        $vpersona = persona::find($id);
        $vpersona->estado = 0;
        $vpersona->save();
        return redirect()->route('persona.index');
    }
}
