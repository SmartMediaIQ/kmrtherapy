@extends('layouts.app-dashboard')

@section('title', 'Create User')

@section('content')

<form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Create User</h4>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-success"><i class="bx bx-arrow-back"></i></a>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" autofocus placeholder="Enter name" value="{{ old('name') }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" autofocus placeholder="Enter email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="password" name="password" autofocus placeholder="Enter password">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" autofocus placeholder="Enter confirm password">
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control" name="role" id="role">
                                    <option value="">Select role</option>
                                    @forelse($roles as $role)
                                    <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('role')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="from-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            {{-- <table class="table mb-0">
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
                            </table> --}}
                            <button class="btn btn-primary mt-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@section('page-specific-script')

<script>
    $(document).ready(function() {
        var current_url = '{{ url()->current() }}';

        $('body').on('change', '#role', function() {
            var id = $(this).val();

            $.ajax({
                type: 'get',
                url: current_url,
                data: {
                    id: id
                },
                success: function(res) {
                    $("tbody").html(res);
                }
            });
        })
    })
</script>

@endsection
