<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\persona;
use App\Models\producto;
use App\Models\insumo;
use App\Models\cliente;
use App\Models\catProducto;
use App\Models\clasProducto;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    // public function index()
    public function users()

    {
        $vusers = User::where('estado',1)->paginate(10000);
        return view('admin\reportes\users' , compact('vusers'));
    }

    public function productos()
    {
        $vproducto = producto::where('estado',1)->paginate(10000);
        return view('admin.reportes.productos', compact('vproducto'));
        // return view('admin/producto/index')->with('vproducto', $vproducto);
    }
    public function insumos()
    {
        $vinsumo = insumo::where('estado',1)->paginate(10000);
        return view('admin/reportes/insumos')->with('vinsumo', $vinsumo);
    }
    public function clientes()
    {
        $vcliente = cliente::where('estado',1)->paginate(10000);
        return view('admin.reportes.clientes', compact('vcliente'));
    }
}
