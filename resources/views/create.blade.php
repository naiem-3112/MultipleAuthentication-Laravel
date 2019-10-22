@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Admin') }}</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>

                                <div>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>

                                <div>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirmpassword">Confirm Password</label>

                                <div>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="role">Assign Role</label>
                                <select name="role" class="form-control">
                                    <option value="0">Admin</option>
                                    <option value="1">Leader</option>
                                    <option value="3">General</option>
                                </select>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="{{ route('admin.list') }}">Back</a>
                        <a href="{{ route('admin.role') }}">Create Role</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
