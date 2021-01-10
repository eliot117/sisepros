<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles= Role::all();
        return view('admin.roles.index',['roles'=> $roles]);
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $role = new Role();
        $role->name = request('name');
        $role->save();
        return redirect()->route('roles.index')->withSuccess('Rol de Usuario creado con exito');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $roles = Role::findOrFail($id)->delete();
        return redirect()->route('roles.index')->withToastError('Eliminado correctamente');
    }
}
