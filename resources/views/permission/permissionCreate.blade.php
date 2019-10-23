@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Permission') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('permission.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>

                                <div>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="for">Permission For</label>

                                <div>
                                    <select name="for" class="form-control">
                                        <option selected disabled>select permission for</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
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
