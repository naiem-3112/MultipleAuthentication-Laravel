@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Role') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('role.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>

                                <div>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="name">Role Permission</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'role')
                                            <div class="checkbox">
                                                <input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">User permission</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'user')
                                            <div class="checkbox">
                                                <input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">Other permission</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 'other')
                                            <div class="checkbox">
                                                <input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div>
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="{{ route('admin.dashboard') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
