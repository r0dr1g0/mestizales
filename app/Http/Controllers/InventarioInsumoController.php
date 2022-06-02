<?php

namespace App\Http\Controllers;

use App\Models\inventarioInsumo;
use Illuminate\Http\Request;

class InventarioInsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prueba');
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
     * @param  \App\Models\inventarioInsumo  $inventarioInsumo
     * @return \Illuminate\Http\Response
     */
    public function show(inventarioInsumo $inventarioInsumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventarioInsumo  $inventarioInsumo
     * @return \Illuminate\Http\Response
     */
    public function edit(inventarioInsumo $inventarioInsumo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inventarioInsumo  $inventarioInsumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventarioInsumo $inventarioInsumo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventarioInsumo  $inventarioInsumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventarioInsumo $inventarioInsumo)
    {
        //
    }
}
