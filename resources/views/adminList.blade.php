@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of Admins</div>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Title</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->title }}</td>
                                <td>{{ $admin->status }}</td>
                                <td>
                                    <a href="{{ route('admin.edit',$admin->id) }}"><button class="btn btn-primary btn-sm">edit</button></a>
                                    <a href="{{ route('admin.delete',$admin->id) }}"><button class="btn btn-danger btn-sm">delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('admin.create') }}"><button class="btn btn-primary btn-sm">Create New Admin</button></a>
                    <a href="{{ route('admin.dashboard') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
