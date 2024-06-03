<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function get()
    {
        return User::get();
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function getByIds($ids)
    {
        return User::findOrFail($ids);
    }

    public function create($request)
    {
        if (isset($request->image) && $request->hasFile('image')) {
            $filename = 'image_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('storage/img/users', $filename);
        }

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password'),
            'image' => $filename ?? ''
        ]);
    }

    public function update($request, $id)
    {
        if (isset($request->image) && $request->hasFile('image')) {
            $filename = 'image_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('storage/img/users', $filename);
        }

        $user = User::whereId($id)->first();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password'),
            'image' => $filename ?? ''
        ]);

        return $user;
    }
}

