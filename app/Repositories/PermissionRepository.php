<?php

namespace App\Repositories;

use App\Interfaces\PermissionRepositoryInterface;
use Spatie\Permission\Models\Permission;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function get()
    {
        return Permission::get();
    }

    public function getById($id)
    {
        return Permission::findOrFail($id);
    }

    public function getByIds($ids)
    {
        return Permission::whereIn('id', $ids)->get();
    }

    public function getPermissionWhereNotIds($ids)
    {
        return Permission::whereNotIn('id', $ids)->get();
    }
}
