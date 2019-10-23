@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of Permission</div>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Permission For</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->for }}</td>
                                <td>
                                    <a href="{{ route('permission.edit',$permission->id) }}"><button class="btn btn-primary btn-sm">edit</button></a>
                                    <a href="{{ route('permission.destroy',$permission->id) }}"><button class="btn btn-danger btn-sm">delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('permission.create') }}">Create Permission</a>
                    <a href="{{ route('admin.dashboard') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
