@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Admin') }}</div>

                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="post">
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
                                <label for="title">Title</label>
                                <div>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <div>
                                    <input id="password_confirmation" type="password" class="form-control"
                                           name="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>

                                <div class="checkbox">
                                    <label><input type="checkbox" name="status" @if(old('status')==1) checked @endif value="1">Status</label>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Assign Role</label>
                                <div class="row">
                                    @foreach($roles as $role)
                                        <div class="col-lg-3">
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="role[]"
                                                              value="{{ $role->id }}">{{ $role->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        <a href="{{ route('admin.list') }}">Back</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

