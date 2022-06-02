<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoCreateRequest;
use App\Http\Requests\ProductoEditRequest;
use App\Models\producto;
use App\Models\catProducto;
use App\Models\clasProducto;
use Illuminate\Http\Request;
use PDF;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->tipo;
        if($tipo)
            {
                $vproducto = producto::where($tipo, 'like', '%'.$request->nombre.'%')->where('estado', 1)->paginate(15);
            }
        else
            {
                $vproducto = producto::where('estado',1)->paginate(500);
            }
        return view('admin/producto/index', compact('vproducto'));
    }

    // public function index()
    // {
    //     $vproducto = producto::where('estado',1)->paginate();
    //     // return view('admin.producto.index', compact('vproducto'));
    //     return view('admin/producto/index')->with('vproducto', $vproducto);
    // }


    public function create()
    {
        $vproducto = producto::where('estado',1)->get();
        $vcatproducto = catProducto::where('estado',1)->get();
        $vclasproducto = clasProducto::where('estado',1)->get();
        return view('admin.producto.create', compact('vproducto','vcatproducto','vclasproducto'));
    }

    public function store(ProductoCreateRequest $request)
    {
        $vproducto = new producto($request->all());
        $vproducto->save();
        return redirect()->route('producto.index');
    }

    public function show($id)
    {
        $vproducto = producto::find($id);
        return view('admin.producto.show', compact('vproducto'));
    }

    public function edit($id)
    {
        $vproducto = producto::find($id);
        $vcatproducto = catProducto::where('estado',1)->where('id','!=', $vproducto->catProducto_id)->get();
        $vclasproducto = clasProducto::where('estado',1)->where('id','!=', $vproducto->clasProducto_id)->get();
        // return view('admin.producto.edit', compact('vproducto','vcatproducto','vclasproducto'));
        return view('admin.producto.edit')->with('vproducto',$vproducto)->with('vcatproducto', $vcatproducto)->with('vclasproducto', $vclasproducto);
    }

    public function update(ProductoEditRequest $request, $id)
    {
        $vproducto = producto::find($id);
        $vproducto->fill($request->all());
        $vproducto->save();
        return redirect()->route('producto.index');
    }

    public function destroy($id)
    {
        $vproducto = producto::find($id);
        $vproducto->estado = 0;
        $vproducto->save();
        return redirect()->route('producto.index');
    }

    public function  export()
    {
        // dd('Soy el export');
        $vproducto = Producto::all();
        view()->share('vproducto', $vproducto);
        $pdf = PDF::loadView('admin.producto.export', $vproducto);
        return $pdf->download('producto.pdf');
        // return $pdf->stream();
    }

    public function reporteFecha(Request $request)
    {
        // dd($request);
        $vproducto = producto::where('created_at', '>=' ,$request->fechaInicio)
        ->where('created_at', '<=', $request->fechaFin. '23.59.59')
        ->paginate(10000);
        return view('admin/producto/index')->with('vproducto', $vproducto);
    }

}
