<?php

namespace App\Services;

use App\Interfaces\PermissionRepositoryInterface;
use App\Interfaces\RoleRepositoryInterface;

class RoleService
{
    private PermissionRepositoryInterface $permissionRepository;
    private RoleRepositoryInterface $roleRepository;

    public function __construct(PermissionRepositoryInterface $permissionRepository, RoleRepositoryInterface $roleRepository) {
        $this->permissionRepository = $permissionRepository;
        $this->roleRepository = $roleRepository;
    }

    public function getRoles()
    {
        return $this->roleRepository->get();
    }

    public function getRoleById($id)
    {
        return $this->roleRepository->getById($id);
    }

    public function createRole($request)
    {
        $role = $this->roleRepository->create($request);
        if($request->permissions) {
            $role->syncPermissions($this->permissionRepository->getByIds($request->permissions));
        }
        
        return $role;
    }

    public function updateRole($request, $id)
    {
        $role = $this->roleRepository->update($request, $id);
        
        $role->permissions()->detach() ?? '';
        
        if($request->permissions) {
            $role->syncPermissions($this->permissionRepository->getByIds($request->permissions));
        }
        
        return $role;
    }

    public function getPermissions()
    {
        return $this->permissionRepository->get();
    }
}