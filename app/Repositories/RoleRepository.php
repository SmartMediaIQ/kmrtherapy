<?php

namespace App\Repositories;

use App\Interfaces\RoleRepositoryInterface;
use Spatie\Permission\Models\Role;

class RoleRepository implements RoleRepositoryInterface
{
    public function get()
    {
        return Role::get();
    }

    public function getById($id)
    {
        return Role::findOrFail($id);
    }

    public function getByIds($ids)
    {
        return Role::whereIn('id', $ids)->get();
    }

    public function create($request)
    {
        return Role::create([
            'name' => $request->name
        ]);
    }

    public function update($request, $id)
    {
        $user = Role::whereId($id)->first();
        $user->update([
            'name' => $request->name
        ]);
        return $user;
    }
}
