@foreach($permissions as $group => $permission)
<tr>
    <td>{{ ucfirst($group) }}</td>
    @foreach($permission as $key => $value)
    <td>
        <div class="checkbox check-success">
            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $value->id }}" id="permission{{ $key }}" @if(in_array($value->id, $role->permissions()->pluck('id')->toArray())) checked @endif>
        </div>
    </td>
    @endforeach
</tr>
@endforeach
