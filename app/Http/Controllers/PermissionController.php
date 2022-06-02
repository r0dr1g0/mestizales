<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
class PermissionController extends Controller
{

    public function index()
    {
        $vpermission = Permission::where('estado', 1)->paginate();
        return view('permissions.index', compact('vpermission'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $vpermission = new Permission($request->only('name'));
        $vpermission->save();
        return redirect()->route('permissions.index');
    }

    public function show($id)
    {
        $vpermission = Permission::find($id);
        return view('permissions.show', compact('vpermission'));
    }

    public function edit($id)
    {
        $vpermission = Permission::find($id);
        return view('permissions.edit', compact('vpermission'));
    }

    public function update(Request $request, $id)
    {
        $vpermission = Permission::find($id);
        $vpermission->fill($request->all());
        $vpermission->save();
        return redirect()->route('permissions.index');
    }

    public function destroy($id)
    {
        $vpermission = Permission::find($id);
        $vpermission->estado = 0;
        $vpermission->save();
        return redirect()->route('permissions.index');
    }
}
