<?php

namespace App\Http\Controllers;

use App\Models\venta;
use App\Models\producto;
use App\Models\metodoPago;
use App\Models\cliente;
use Illuminate\Http\Request;

class VentaController extends Controller
{

    public function index()
    {
        $vventa = venta::where('estado',1)->paginate();
        return view('admin.venta.index', compact('vventa'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(venta $venta)
    {
        //
    }

    public function edit(venta $venta)
    {
        //
    }

    public function update(Request $request, venta $venta)
    {
        //
    }

    public function destroy(venta $venta)
    {
        //
    }
}
