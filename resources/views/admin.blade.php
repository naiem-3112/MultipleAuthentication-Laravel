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

                        <a href="{{ route('admin.list') }}">List of Admin</a>
                        <a href="{{ route('role.create') }}">Create Role</a>
                        <a href="{{ route('role.show') }}">List of Role</a>
                        <a href="{{ route('permission.index') }}">Permissions</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
