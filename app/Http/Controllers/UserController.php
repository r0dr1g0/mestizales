<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\persona;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{

    public function index()
    {
        $vusers = User::where('estado',1)->paginate();
        return view('admin.users.index', compact('vusers'));
    }

    public function create()
    {
        $vrole = Role::all()->pluck('name', 'id');
        $vusers = User::where('estado',1)->get();
        $vpersona = persona::where('estado',1)->get();
        // return view('admin.users.create', compact('vusers', 'vpersona'));
        return view('admin.users.create', compact('vusers', 'vrole', 'vpersona'));
    }

    public function store(Request $request)
    {
        // $vusers = User::create($request->only('name','email','username')
        $vusers = new User($request->only('persona_id','email','username')
        +[
            'password' => bcrypt($request->input('password')),
        ]);
        $vrole = $request->input('roles',[]);
        $vusers->syncRoles($vrole);
        $vusers->save();
        return redirect()->route('users.index', compact('vrole'))->with('success', '¡ El usuario ha sido creado correctamente !');
    }

    public function show($id)
    {
        $vusers = User::find($id);
        return view('admin.users.show', compact('vusers'));
    }

    public function edit($id)
    {
        $vrole = Role::all()->pluck('name', 'id');
        // $vusers->load('roles');
        $vusers = User::find($id);
        $vpersona = persona::where('estado',1)->where('id', '!=', $vusers->persona_id)->get();
        return view('admin/users/edit', compact('vusers','vpersona', 'vrole'));
    }

    public function update(Request $request, $id)
    {
        $vusers = User::find($id);
        $data = $request->only('email', 'username', 'persona_id');

        // OTRA FORMA DE REALIZAR OPTIMIZANDO CODICO
        $password = $request->input('password');
        if ($password)
            $data['password'] = bcrypt($password);

            // OTRA FORMA DE REALIZAR
        // if(trim($request->password) == ' ')
        // {
        //     $data = $request->except('password');
        // }
        // else
        // {
        //     $data = $request->all();
        //     $data['password']=bcrypt($request->password);
        // }

        $vusers->update($data);
        $vusers->save();
        $vrole = $request->input('roles',[]);
        $vusers->syncRoles($vrole);
        return redirect()->route('users.index')->with('secondary', 'Acabas de realizar unos cambios correctamente !');
    }

    public function destroy($id)
    {
        $vusers = User::find($id);
        $vusers->estado = 0;
        $vusers->save();
        return redirect()->route('users.index');
    }
}


    // public function create()
    // {

    //     return view('admin.users.create');
    // }

    // public function store(Request $request)
    // {

    //     User::create($request->only('name','email','username')
    //     +[
    //         'password' => bcrypt($request->input('password')),
    //     ]);
    //     return redirect()->back();
    // }
