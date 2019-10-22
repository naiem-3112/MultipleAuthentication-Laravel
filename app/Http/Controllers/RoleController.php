<?php

namespace App\Http\Controllers;



use App\Role;
use App\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles'
        ]);
        $role = new Role();
        $role->name = $request->name;
        $role->save();
        return redirect('role_show');
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('role.create', compact('permissions'));
    }

    public function show()
    {
        $roles = Role::all();
        return view('role.show', compact('roles'));
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        return back();
    }
    public function edit($id){
        $permissions = Permission::all();
        $role = Role::find($id);
        return view('role.edit', compact('permissions', 'role'));
    }

    public function update(Request $request, $id){
        return $request->all();
        $this->validate($request, [
           'name' => 'required'
        ]);
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        return redirect('role_show');
    }
}
