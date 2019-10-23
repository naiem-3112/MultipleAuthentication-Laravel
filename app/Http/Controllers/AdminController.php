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

    public function edit()
    {
        $roles = Role::all();
        return view('admin.adminEdit', compact('roles'));

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

}
