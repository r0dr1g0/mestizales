<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $vproveedor = proveedor::where('estado',1)->paginate();
        return view('admin.proveedor.index', compact('vproveedor'));
        // return view('admin.proveedor.index');
    }

    public function create()
    {
        return view('admin.proveedor.create');
    }

    public function store(Request $request)
    {
        $vproveedor = new proveedor($request->all());
        $vproveedor->save();
        return redirect()->route('proveedor.index');
    }

    public function show($id)
    {
        $vproveedor = proveedor::find($id);
        return view('admin.proveedor.show', compact('vproveedor'));
    }

    public function edit($id)
    {
        $vproveedor = proveedor::find($id);
        return view('admin.proveedor.edit', compact('vproveedor'));
    }

    public function update(Request $request, $id)
    {
        $vproveedor = proveedor::find($id);
        $vproveedor->fill($request->all());
        $vproveedor->save();
        return redirect()->route('proveedor.index');
    }

    public function destroy($id)
    {
        // $vproveedor = proveedor::find($id);
        // $vproveedor->update(['estado'=>'0']);
        // return redirect()->route('proveedor.index');

        $vproveedor = proveedor::find($id);
        $vproveedor->estado = 0;
        $vproveedor->save();
        return redirect()->route('proveedor.index');
    }
}
