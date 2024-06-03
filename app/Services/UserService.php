<?php

namespace App\Services;

use App\Interfaces\PermissionRepositoryInterface;
use App\Interfaces\RoleRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;

class UserService
{
    private UserRepositoryInterface $userRepository;
    private RoleRepositoryInterface $roleRepository;
    private PermissionRepositoryInterface $permissionRepository;

    public function __construct(UserRepositoryInterface $userRepository, RoleRepositoryInterface $roleRepository, PermissionRepositoryInterface $permissionRepository) {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    public function getUsers()
    {
        return $this->userRepository->get();
    }

    public function getUserById($id)
    {
        return $this->userRepository->getById($id);
    }

    public function createUser($request)
    {
        $user = $this->userRepository->create($request);
        $user = $this->assignRolePermission($request, $user);

        return $user;
    }

    public function updateUser($request, $id)
    {
        $user = $this->userRepository->update($request, $id);

        $user->roles()->detach() ?? '';
        $user->permissions()->detach() ?? '';
        $user = $this->assignRolePermission($request, $user);

        return $user;
    }

    public function assignRolePermission($request, $user)
    {
        $role = $this->roleRepository->getById($request->role);
        $user->assignRole($role->name);
        if ($request->permissions) {
            $permissionIds = $request->permissions;
            $permissions = $this->permissionRepository->getByIds($permissionIds);
            $permissionNames = $permissions->pluck('name')->all();
            $user->givePermissionTo($permissionNames);
        } else {
            $user->givePermissionTo($role->permissions()->pluck('name')->all());
        }

        return $user;
    }

    public function randerPermissionHTML($request)
    {
        $role = $this->roleRepository->getById($request->id);
        $permissions = $this->permissionRepository->get()->groupBy('group');

        return view('includes.permission', compact('role', 'permissions'))->render();
    }

    public function getRoles()
    {
        return $this->roleRepository->get();
    }

    public function getPermissions()
    {
        return $this->permissionRepository->get();
    }

    public function updateUserPermission($request, $id)
    {
        $user = $this->userRepository->getById($id);
        $user->permissions()->detach();
        $permissions = $this->permissionRepository->getByIds($request->permissions);
        $permissionNames = $permissions->pluck('name')->all();
        $user->givePermissionTo($permissionNames);

        return $user;
    }
}
