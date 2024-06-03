<?php

namespace App\Interfaces;
        
interface PermissionRepositoryInterface
{
    public function get();
    public function getById($id);
    public function getByIds($ids);
    public function getPermissionWhereNotIds($ids);
}