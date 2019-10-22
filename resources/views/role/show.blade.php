@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of Roles</div>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)

                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a href="{{ route('role.edit', $role->id) }}"><button class="btn btn-primary btn-sm">edit</button></a>
                                    <a href="{{ route('role.delete', $role->id) }}"><button class="btn btn-danger btn-sm">delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('role.create') }}">Create Role</a>
                    <a href="{{ route('admin.dashboard') }}">Back</a>


                </div>
            </div>
        </div>
    </div>
@endsection
