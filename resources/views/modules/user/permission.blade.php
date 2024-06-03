@extends('layouts.app-dashboard')

@section('title', 'User Permission')

@section('content')
<form action="{{ route('user.permission', $user->id) }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Update User Permission</h4>
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-success"><i class="bx bx-arrow-back"></i></a>
                    </div>

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
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $value->id }}" id="permission{{ $key }}" @if(in_array($value->id, $user->permissions()->pluck('id')->toArray())) checked @endif>
                                    </div>
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button class="btn btn-primary mt-3">Submit</button>
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
