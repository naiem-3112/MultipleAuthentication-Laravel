<?php

namespace App\Http\Controllers;
use App\Role;

use Illuminate\Http\Request;
use App\Admin;

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
    public function list(){
        $admins = Admin::all();
        return view('adminList', compact('admins'));
    }
    public function create(){
        $roles = Role::all();
        return view('create', compact('roles'));
    }
    public function edit(){

    }
    public function show(){

    }

}
