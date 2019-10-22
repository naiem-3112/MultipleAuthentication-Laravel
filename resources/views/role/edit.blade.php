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
