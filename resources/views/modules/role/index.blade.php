@extends('layouts.app-dashboard')

@section('title', 'Manage Role')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Roles</h4>
                    <a href="{{ route('role.create') }}" class="btn btn-primary">Create role</a>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0" id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $key => $role)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a href="{{ $role->name == 'SuperAdmin' ? '#' : route('role.edit', $role->id) }}" class="btn btn-sm btn-primary"><i class="bx bx-edit-alt"></i></a>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
