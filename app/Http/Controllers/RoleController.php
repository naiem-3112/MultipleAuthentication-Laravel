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
        return view('role.edit')->with(['role'=>Role::find($id)]);
    }
    public function update(Request $request, $id){
        $this->validate($request, [
           'name' => 'required'
        ]);
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        return redirect('role_show');
    }
}
