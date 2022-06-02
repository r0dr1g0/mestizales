<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleCreateRequest;
use App\Http\Requests\RoleEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('role_index'), 403);
        $roles = Role::where('estado', 1)->paginate(10);
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        abort_if(Gate::denies('role_create'), 403);
        // el pluck solo extrae 2 variables 'el value', y el 'key'
        $permissions = Permission::all()->pluck('name', 'id');
        // dd($permissions);
        return view('roles.create', compact('permissions'));
    }


    public function store(RoleCreateRequest $request)
    {
        $role = Role::create($request->only('name'));
        // sync es para unir tablas de mucho a muchos esta en la documentacion de laravel (syncing associations)
        // $role->permissions()->sync($request->input('permissions', []));
        $role->syncPermissions($request->input('permissions', []));
        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        abort_if(Gate::denies('role_show'), 403);
        $role->load('permissions');
        return view('roles.show', compact('role'));
    }


    public function edit(Role $role)
    {
        abort_if(Gate::denies('role_edit'), 403);
        $permissions = Permission::all()->pluck('name', 'id');
        // para cargar atravez de una relacion entre tablas usare load
        $role->load('permissions');

        return view('roles.edit', compact('role', 'permissions'));
    }


    public function update(RoleEditRequest $request, Role $role)
    {
        $role->update($request->only('name'));
        $role->syncPermissions($request->input('permissions', []));
        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        abort_if(Gate::denies('role_destroy'), 403);
        // en el apartado de destroy no configure nada ya que al realizar una migracion de la tabla roles y permisos se crea una tabla hija, pero en la migracion
        // dice onDelete('cascade') quiere decir que elimina a las tablas hijas, pero eso no quiere decir que elimina a los permisos eso se mantiene.
        // cuando trabaje tablas de mucho a mucho que no me olvide poner onDelete('cascade')
        $role = Role::find($id);
        $role->estado = 0;
        $role->save();
        return redirect()->route('roles.index')->with('success', 'Rol dado de baja correctamente');
    }
}
