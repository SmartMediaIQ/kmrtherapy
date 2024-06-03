<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\RoleService;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Role\CreateRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;

class RoleController extends Controller
{
    private RoleService $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        $roles = $this->roleService->getRoles();

        return view('modules.role.index', compact('roles'));
    }

    public function create()
    {
        $permissions = $this->roleService->getPermissions()->groupBy('group');

        return view('modules.role.create', compact('permissions'));
    }

    public function store(CreateRoleRequest $request)
    {
        if($this->roleService->createRole($request)) {
            return redirect()->route('role.index')->with('success', 'Role is created.');
        }
        return redirect()->route('role.index')->with('error', 'Role is not created.');
    }

    public function edit($id)
    {
        $role = $this->roleService->getRoleById($id);
        $permissions = $this->roleService->getPermissions()->groupBy('group');

        if($role->name == 'SuperAdmin') {
            abort(403, 'You cannot edit SuperAdmin role.');
        }

        return view('modules.role.edit', compact('role', 'permissions'));
    }

    public function update(UpdateRoleRequest $request, $id)
    {
        if($this->roleService->updateRole($request, $id)) {
            return redirect()->route('role.index')->with('success', 'Role is updated.');
        }
        return redirect()->route('role.index')->with('error', 'Role is not updated.');
    }

    public function destroy($id)
    {
        if(Role::find($id)->delete()) {
            return redirect()->route('role.index')->with('success', 'Role is deleted.');
        }
        return redirect()->route('role.index')->with('error', 'Role is not deleted.');
    }
}
