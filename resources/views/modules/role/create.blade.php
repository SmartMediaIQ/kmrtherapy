@extends('layouts.app-dashboard')

@section('title', 'Create Role')

@section('content')
<form action="{{ route('role.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Create Role</h4>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-success"><i class="bx bx-arrow-back"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" autofocus>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>View</th>
                                        <th>Create</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permissions as $group => $permission)
                                    <tr>
                                        <td>{{ ucfirst($group) }}</td>
                                        @foreach($permission as $key => $value)
                                        <td>
                                            <div class="checkbox check-success">
                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $value->id }}" id="permission{{ $key }}">
                                            </div>
                                        </td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@section('page-specific-script')

@endsection
