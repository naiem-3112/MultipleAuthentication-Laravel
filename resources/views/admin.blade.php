@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>


                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('admin.list') }}"><button class="btn btn-success btn-sm float-left">List of Admin</button></a>
                        <a href="{{ route('role.create') }}"><button class="btn btn-warning btn-sm float-right">Manage Role</button></a>
                        <a href="{{ route('role.show') }}"><button class="btn btn-primary btn-sm float-left">List of Role</button></a>
                        <a href="{{ route('permission.index') }}"><button class="btn btn-danger btn-sm float-right">Manage Permissions</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
