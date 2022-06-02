<?php

namespace App\Http\Controllers;

use App\Models\Sabor;
use Illuminate\Http\Request;

/**
 * Class SaborController
 * @package App\Http\Controllers
 */
class SaborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sabors = Sabor::paginate();

        return view('sabor.index', compact('sabors'))
            ->with('i', (request()->input('page', 1) - 1) * $sabors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sabor = new Sabor();
        return view('sabor.create', compact('sabor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sabor::$rules);

        $sabor = Sabor::create($request->all());

        return redirect()->route('sabors.index')
            ->with('success', 'Sabor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sabor = Sabor::find($id);

        return view('sabor.show', compact('sabor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sabor = Sabor::find($id);

        return view('sabor.edit', compact('sabor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sabor $sabor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sabor $sabor)
    {
        request()->validate(Sabor::$rules);

        $sabor->update($request->all());

        return redirect()->route('sabors.index')
            ->with('success', 'Sabor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sabor = Sabor::find($id)->delete();

        return redirect()->route('sabors.index')
            ->with('success', 'Sabor deleted successfully');
    }
}
