<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller
{

    public function index()
    {
        $vrole = Role::where('estado', 1)->paginate();
        return view('roles.index', compact('vrole'));
    }

    public function create()
    {
        $vpermission = Permission::all()->pluck('name', 'id');
        return view('roles.create', compact('vpermission'));
    }

    public function store(Request $request)
    {
        $vrole = Role::create($request->only('name'));
        $vrole->syncPermissions($request->input('permissions',  []));
        return redirect()->route('roles.index');
    }

        public function show(  $id)
    {
        $vrole = Role::find($id);
        $vrole->load('permissions');
        return view('roles.show', compact('vrole'));
    }

    public function edit ($id)
    {
        $vrole = Role::find($id);
        $vpermission = Permission::all()->pluck('name', 'id');
        $vrole->load('permissions');
        return view('roles.edit', compact('vrole', 'vpermission'));
    }

    public function update(Request $request,  $id)
    {
        $vrole = Role::find($id);
        $vrole->update($request->only('name'));
        $vrole->syncPermissions($request->input('permissions', []));
        return redirect()->route('roles.index');
    }

        public function destroy($id)
    {
        $vrole = Role::find($id);
        $vrole->estado = 0;
        $vrole->save();
        return redirect()->route('roles.index');
    }

//     public function create()
//     {
//         return view('roles.create');
//     }

//     public function store(Request $request)
//     {
//         $vrole = new Role($request->only('name'));
//         $vrole->save();
//         return redirect()->route('roles.index');
//     }

//     public function show($id)
//     {
//         $vrole = Role::find($id);
//         return view('roles.show', compact('vrole'));
//     }

//     public function edit($id)
//     {
//         $vrole = Role::find($id);
//         return view('roles.edit', compact('vrole'));
//     }

//     public function update(Request $request, $id)
//     {
//         $vrole = Role::find($id);
//         $vrole->fill($request->all());
//         $vrole->save();
//         return redirect()->route('roles.index');
//     }

//     public function destroy($id)
//     {
//         $vrole = Role::find($id);
//         $vrole->estado = 0;
//         $vrole->save();
//         return redirect()->route('roles.index');
//     }
}
