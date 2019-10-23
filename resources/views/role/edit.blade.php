@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Role') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('role.update', $role->id) }}">
                            @csrf


                            <div class="form-group">
                                <label for="name">Name</label>

                                <div>
                                    <input type="text" class="form-control" name="name" value="{{ $role->name }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="name">Role Permission</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 1)
                                            <div class="checkbox">
                                                <input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                                                @foreach($role->permissions as $role_permit)
                                                    @if($role_permit->id == $permission->id)
                                                        checked
                                                        @endif
                                                    @endforeach
                                                >{{ $permission->name }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">User permission</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 2)
                                            <div class="checkbox">
                                                <input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                                                       @foreach($role->permissions as $role_permit)
                                                       @if($role_permit->id == $permission->id)
                                                       checked
                                                    @endif
                                                    @endforeach
                                                >{{ $permission->name }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-lg-4">
                                    <label for="name">Other permission</label>
                                    @foreach($permissions as $permission)
                                        @if($permission->for == 3)
                                            <div class="checkbox">
                                                <input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                                                       @foreach($role->permissions as $role_permit)
                                                       @if($role_permit->id == $permission->id)
                                                       checked
                                                    @endif
                                                    @endforeach
                                                >{{ $permission->name }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                        <a href="{{ route('role.show') }}">Back</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
