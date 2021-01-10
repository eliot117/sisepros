<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index',['users'=>$users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create',['roles' => $roles]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'     => 'required|max:60',
            'lastname' => 'required|max:80',
            'email'    => 'required|email|max:255|unique:users',
            'rol'      => 'required',
            'password' => 'required|min:8|confirmed'
        ]);

        $users = new User();
        $users->name     = request('name');
        $users->lastname = request('lastname');
        $users->email    = request('email');
        $users->password = bcrypt(request('password'));
        $users->save();

        $users->asignarRol($request->get('rol'));

        return redirect('users')->withSuccess('Usuario Creado Correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.users.edit',['users'=>$users, 'roles' => $roles]);
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),
        ['name'     => ['required','max:50']],
        ['lastname' => ['required','max:50']],
        ['email'    => ['required', 'email', 'max:90', 'unique:users,email,'.$id]],
        ['rol'      => ['required']],
        ['password' => ['confirmed']
        ]);

        $users = User::findOrFail($id);

        $users->name     = $request->get('name');
        $users->lastname = $request->get('lastname');
        $users->email    = $request->get('email');

        $pass = $request->get('password');

        if($pass != null )
        {
            $users->password= bcrypt($request->get('password'));
        }
        else
        {
            unset($users->password);
        }

        $role = $users->roles;

        if(count($role) > 0)
        {
            $role_id = $role[0]->id;
            User::find($id)->roles()->updateExistingPivot($role_id,['role_id' => $request->get('rol')]);
        }
        else
        {
            $users->asignarRol($request->get('rol'));
        }

        $users->update();

        return redirect('users')->withInfoAlert('Datos Actualizados Correctamente');
    }

    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('users')->withToastError('Eliminado correctamente');
    }
}
