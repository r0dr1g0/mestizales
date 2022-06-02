<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\catProducto;
use Illuminate\Http\Request;

class CatProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vcatproducto = catProducto::where('estado',1)->paginate(5);
        return view('admin.catProducto.index', compact('vcatproducto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function show(catProducto $catProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(catProducto $catProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catProducto $catProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catProducto  $catProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(catProducto $catProducto)
    {
        //
    }
}
