<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Admin;
use App\Role;

class AdminController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }

    public function list()
    {
        $admins = Admin::all();
        return view('adminList', compact('admins'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.adminCreate', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'title' => 'required',
            'password' => 'required|min:3|confirmed',
            'status' => 'nullable'
        ]);
        $request['password'] = bcrypt($request->password);
        Admin::create($request->all());
        return redirect('admin/list');
    }

    public function edit($id)
    {
        $roles = Role::all();
        $admin = Admin::find($id);
        return view('admin.adminEdit', compact('admin', 'roles'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|',
            'title' => 'required',
            'status' => 'nullable',
        ]);
        $adminfind = Admin::find($id);
        $adminfind->name = $request->name;
        $adminfind->email = $request->email;
        $adminfind->title = $request->title;
        $adminfind->status = $request->status;
        $adminfind->update();
        return redirect('admin/list');
    }

    public function delete($id)
    {
        Admin::find($id)->delete();
        return back();
    }
}
