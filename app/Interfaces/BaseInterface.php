<?php

namespace App\Interfaces;
        
interface BaseInterface
{
    public function get();
    public function getById($id);
    public function getByIds($ids);
    public function create($request);
    public function update($request, $id);
}